<template>
    <div>
        <form v-if="!this.return_add.success" id="form" class="container">
            <div class="form-section">
                <h3>Informações Pessoais</h3>
                <div class="field required">
                    <div :class="['full-input',this.return_add.errors.name?'is-danger':'',!this.return_add.errors.name&&this.candidate.name!==''?'is-success':'']">
                        <label class="label">Nome Completo</label>
                        <div class="control">
                            <input class="" v-model="candidate.name" type="text" placeholder="Digite seu nome" required>
                        </div>
                    </div>
                    <p :class="['help','is-danger']">{{this.return_add.errors.name?this.return_add.errors.name[0]:''}}</p>
                </div>
                <div class="field required">
                    <div :class="['full-input',this.return_add.errors.email?'is-danger':'',!this.return_add.errors.email&&this.candidate.email!==''?'is-success':'']">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="" v-model="candidate.email" type="email" placeholder="Digite seu email" required>
                        </div>
                    </div>
                    <p :class="['help','is-danger']">{{this.return_add.errors.email?this.return_add.errors.email[0] : ''}}</p>
                </div>
                <div class="field required">
                    <div :class="['full-input',this.return_add.errors.phone?'is-danger':'',!this.return_add.errors.phone&&this.candidate.phone!==''?'is-success':'']">
                        <label class="label">Telefone (com ddd)</label>
                        <div class="control">
                            <the-mask  v-model="candidate.phone" :mask="['(##) ####-####', '(##) #####-####']" placeholder="(XX) XXXXX-XXXX" required/>
                        </div>
                    </div>
                    <p :class="['help','is-danger']">{{this.return_add.errors.phone?this.return_add.errors.phone[0] : ''}}</p>
                </div>
            </div>
            <div class="form-section">
                <h3>Carta de apresentação</h3>
                <div class="field">
                    <div class="full-input">
                        <label class="label">Conte sua motivação</label>
                        <div class="control">
                            <textarea class="" v-model="candidate.motivation" type="text" placeholder="Faça um breve resumo sobre você" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <h3>Últimas perguntas</h3>
                <div class="field required">
                    <div :class="['full-input',this.return_add.errors.linkedin?'is-danger':'',!this.return_add.errors.linkedin&&this.candidate.linkedin!==''?'is-success':'']">
                        <label class="label">Url do seu Linkedin</label>
                        <div class="control">
                            <input class="" v-model="candidate.linkedin" type="text"  placeholder="www.linkedin.com/xxxxxxxxxx" required>
                        </div>
                    </div>
                    <p :class="['help','is-danger']">{{this.return_add.errors.linkedin?this.return_add.errors.linkedin[0] : ''}}</p>
                </div>
                <div class="field required">
                    <div :class="['full-input',this.return_add.errors.github?'is-danger':'',!this.return_add.errors.github&&this.candidate.github!==''?'is-success':'']">
                        <label class="label">Url do seu github</label>
                        <div class="control">
                            <input class="" v-model="candidate.github" type="text" placeholder="www.github.com/xxxxxxxxxx" required>
                        </div>
                    </div>
                    <p :class="['help','is-danger']">{{this.return_add.errors.github?this.return_add.errors.github[0] : ''}}</p>
                </div>
                <div class="field required">
                    <div :class="['full-input',this.return_add.errors.english_level?'is-danger':'',!this.return_add.errors.english_level&&this.candidate.english_level!==''?'is-success':'']">
                        <label class="label">Qual seu nível de inglês?</label>
                        <div class="control">
                            <select v-model="candidate.english_level" required>
                                <option value="nothing">Não sei inglês</option>
                                <option value="starter">Básico</option>
                                <option value="intermediate">Intermediário</option>
                                <option value="advanced">Avançado</option>
                                <option value="fluent">Fluente</option>
                            </select>
                        </div>
                    </div>
                    <p :class="['help','is-danger']">{{this.return_add.errors.english_level? this.return_add.errors.english_level[0]: ''}}</p>
                </div>
                <div class="field required">
                    <div :class="['full-input',this.return_add.errors.salary_pretension?'is-danger':'',!this.return_add.errors.salary_pretension&&this.candidate.salary_pretension!==''?'is-success':'']">
                        <label class="label">Pretenção salarial</label>
                        <div class="control">
                            <div class="cifrao">R$</div><input class="" v-model="candidate.salary_pretension" type="text" placeholder="" required>
                        </div>
                    </div>
                    <p :class="['help','is-danger']">{{this.return_add.errors.salary_pretension?this.return_add.errors.salary_pretension[0] : ''}}</p>
                </div>
            </div>
            <div class="form-section">
                <h3>Anexe seu currículo em PDF ou DOC</h3>
                <div class="file">
                    <label class="file-label required">
                        <input class="file-input" @change="onCurriculumChange" type="file" name="resume" required>
                        <span :class="['file-cta',this.file_name!==''?'file-buttom-pressed':'']">
                            <span class="file-label">
                                {{this.file_name!==''?this.file_name:'Escolher arquivo'}}
                            </span>
                        </span>
                    </label>
                </div>
            </div>
            <div class="form-section">
                <button class="button is-large is-success w-100" @click="sendCandidateInformations">Enviar</button>
            </div>
            <div class="form-section form-subtitle">
                <div><span class="simbol-required">*</span> Campos Obrigatórios</div>
            </div>

        </form>
        <div v-else class="success_screen">
            <div class="check_mark">
                <div class="sa-icon sa-success animate">
                    <span class="sa-line sa-tip animateSuccessTip"></span>
                    <span class="sa-line sa-long animateSuccessLong"></span>
                    <div class="sa-placeholder"></div>
                    <div class="sa-fix"></div>
                </div>
            </div>
            <h3>Recebemos a sua intenção de candidatura com <span>sucesso</span>, agora é só aguardar!</h3>
        </div>
        
    </div>
    
</template>

<script>

    export default {
        props: {
            vacant_id: Number,
        },
        mounted() {
            
        },
        data(){
            return{
                candidate:{
                    name:'',
                    email:'',
                    phone:'',
                    motivation:'',
                    linkedin:'',
                    github:'',
                    english_level:'',
                    salary_pretension:'',
                    curriculum:''
                },
                file_name:'',
                return_add:{
                    errors:{
                        name:'',
                        email:'',
                        phone:'',
                        motivation:'',
                        linkedin:'',
                        github:'',
                        english_level:'',
                        salary_pretension:'',
                        curriculum:''
                    },
                    success:false,
                }
            }
        },
        methods:{
            onCurriculumChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createFile(files[0]);
            },
            createFile(file) {
                let reader = new FileReader();

                let vm = this;
                reader.onload = (e) => {
                    vm.candidate.curriculum = e.target.result;
                };
                this.file_name = file.name;
                reader.readAsDataURL(file);
                
            },
            makeReturnEmpty(){
                this.return_add.message = '';
                this.return_add.errors.name = '';
                this.return_add.errors.email = '';
                this.return_add.errors.phone = '';
                this.return_add.errors.motivation ='';
                this.return_add.errors.linkedin = '';
                this.return_add.errors.github ='';
                this.return_add.errors.english_level = '';
                this.return_add.errors.salary_pretension ='';
                this.return_add.errors.curriculum = '';
            },
            sendCandidateInformations(e){
                e.preventDefault()
                axios
                .post(route('api.candidate.add',{id:this.vacant_id}),this.candidate)
                .then((response) => {
                    this.makeReturnEmpty();
                    this.return_add.success = response.data.success;
                    this.return_add.errors = response.data;

                }).catch((error) => {
                    this.makeReturnEmpty();
                    this.return_add.success = error.response.data.success;
                    this.return_add.errors = error.response.data;

                });
            }
            
        }
    }
</script>
