<template>
    <form id="form" class="container">
        <div class="form-section">
            <h3>Informações Pessoais</h3>
            <div class="field required">
                <div class="full-input">
                    <label class="label">Nome Completo</label>
                    <div class="control">
                        <input class="" type="text" placeholder="Digite seu nome">
                    </div>
                </div>
            </div>
            <div class="field required">
                <div class="full-input">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="" type="email" placeholder="Digite seu email">
                    </div>
                </div>
            </div>
            <div class="field required">
                <div class="full-input">
                    <label class="label">Telefone (com ddd)</label>
                    <div class="control">
                        <input class="" type="text" placeholder="(XX) XXXXX-XXXX">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-section">
            <h3>Carta de apresentação</h3>
            <div class="field">
                <div class="full-input">
                    <label class="label">Conte sua motivação</label>
                    <div class="control">
                        <textarea class="" type="text" placeholder="Faça um breve resumo sobre você" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-section">
            <h3>Últimas perguntas</h3>
            <div class="field required">
                <div class="full-input">
                    <label class="label">Url do seu Linkedin</label>
                    <div class="control">
                        <input class="" type="text" placeholder="www.linkedin.com/xxxxxxxxxx">
                    </div>
                </div>
            </div>
            <div class="field required">
                <div class="full-input">
                    <label class="label">Url do seu github</label>
                    <div class="control">
                        <input class="" type="text" placeholder="www.github.com/xxxxxxxxxx">
                    </div>
                </div>
            </div>
            <div class="field required">
                <div class="full-input">
                    <label class="label">Qual seu nível de inglês?</label>
                    <div class="control">
                        <select>
                            <option value="1">Não sei inglês</option>
                            <option value="2">Básico</option>
                            <option value="3">Intermediário</option>
                            <option value="4">Avançado</option>
                            <option value="5">Fluente</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="field required">
                <div class="full-input">
                    <label class="label">Pretenção salarial</label>
                    <div class="control">
                        <div class="cifrao">R$</div><input class="" type="text" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-section">
            <h3>Anexe seu currículo em PDF ou DOC</h3>
            <div class="file">
                <label class="file-label required">
                    <input class="file-input" type="file" name="resume">
                    <span class="file-cta">
                        <span class="file-label">
                            Escolher arquivo
                        </span>
                    </span>
                </label>
            </div>
        </div>
        <div class="form-section">
            <a class="button is-large is-success w-100" href="#form">Enviar</a>
        </div>
        <div class="form-section form-subtitle">
            <div><span class="simbol-required">*</span> Campos Obrigatórios</div>
        </div>

    </form>
</template>

<script>

    export default {
        props: {
            vacant_id: Number,
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
