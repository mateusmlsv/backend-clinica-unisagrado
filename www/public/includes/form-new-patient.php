<section class="patient-info" >
    <h1>Ficha de identificação do paciente</h1>
    <form method="post">
        <div class="titleSection">
            <h1>Informações pessoais</h1>
        </div>
        <div class="contentSection">
            <div class="input">
                <span>Nome *</span>
                <input type="text" name="name" required value="<?=$patient['name'] ?? null?>">
                <span class="span-error"></span>
            </div>
            <div class="gridSection grow5">
                <div class="input">
                    <span>Data Nascimento *</span>
                    <input type="date" name="dt_birthday" required value="<?=$patient['dt_birthday'] ?? null?>">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Peso *</span>
                    <input type="text" name="weight" required value="<?=$patient['weight'] ?? null?>">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Altura *</span>
                    <input type="text" name="height" required value="<?=$patient['height'] ?? null?>">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Gênero *</span>
                    <select name="gender" id="gender" required value="<?=$patient['gender'] ?? null?>">
                        <option value=""></option>
                        <option value="F">Feminino</option>
                        <option value="M">Masculino</option>
                    </select>
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Cor</span>
                    <select name="race" id="race" required value="<?=$patient['race'] ?? null?>">
                        <option value=""></option>
                        <option value="BRANCA">Branca</option>
                        <option value="PARDA">Parda</option>
                        <option value="NEGRA">Negra</option>
                    </select>
                    <span class="span-error"></span>
                </div>
            </div>
            <div class="gridSection grow2">
                <div class="input">
                    <span>Escolaridade *</span>
                    <input type="text" name="schooling" required value="<?=$patient['schooling'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Profissão *</span>
                    <input type="text" name="profession" required value="<?=$patient['profession'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
            </div>
            <div class="gridSection grow3">
                <div class="input">
                    <span>RG *</span>
                    <input type="text" name="rg" required value="<?=$patient['rg'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>CPF *</span>
                    <input type="text" name="CPF" required value="<?=$patient['CPF'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Estado civil *</span>
                    <input type="text" name="marital_status" required value="<?=$patient['marital_status'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
            </div>

            <div class="titleSection">
                <h1>Filiação</h1>
            </div>
            <div class="gridSection grow2_first_important">
                <div class="input">
                    <span>Nome do pai *</span>
                    <input type="text" name="father_name" required value="<?=$patient['father_name'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Nacionalidade do pai *</span>
                    <input type="text" name="father_nationality" required value="<?=$patient['father_nationality'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
            </div>
            <div class="gridSection grow2_first_important">
                <div class="input">
                    <span>Nome da mãe *</span>
                    <input type="text" name="mother_name" required value="<?=$patient['mother_name'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Nacionalidade da mãe *</span>
                    <input type="text" name="mother_nationality" required value="<?=$patient['mother_nationality'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
            </div>

            <div class="titleSection">
                <h1>Contatos</h1>
            </div>
            <div class="gridSection grow2">
                <div class="input">
                    <span>Telefone</span>
                    <input type="text" name="telephone">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Celular *</span>
                    <input type="text" name="cellphone" required value="<?=$patient['cellphone'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
            </div>

            <div class="titleSection">
                <h1>Endereço</h1>
            </div>
            <div class="gridSection grow2_second_important">
                <div class="input">
                    <span>CEP *</span>
                    <input type="text" name="CEP" required value="<?=$patient['CEP'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Endereço *</span>
                    <input type="text" name="address" required value="<?=$patient['address'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
            </div>
            <div class="gridSection grow3_20_40_40">
                <div class="input">
                    <span>N° *</span>
                    <input type="text" name="address_number" required value="<?=$patient['address_number'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Complemento</span>
                    <input type="text" name="complement" value="<?=$patient['complement'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Bairro *</span>
                    <input type="text" name="district" required value="<?=$patient['district'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
            </div>
            <div class="gridSection grow2">
                <div class="input">
                    <span>Cidade *</span>
                    <input type="text" name="city" required value="<?=$patient['city'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
                <div class="input">
                    <span>Estado *</span>
                    <input type="text" name="state" required value="<?=$patient['state'] ?? null ?>">
                    <span class="span-error"></span>
                </div>
            </div>

            <div class="actionButton">
                <button type="submit">Cadastrar</button>
                <button type="reset" class="button-error">Limpar</button>
            </div>
        </div>
    </form>
</section>