<section>
            <form>
            <input type="hidden" name="patient_id" value="<?=$_GET['patient_id']?>">
            <div class="contentSection">
                <div class="input">
                    <span>Queixa principal *</span>
                    <textarea name="queixa" id="queixa" rows="5"><?=$prontuario['queixa'] ?? null ?></textarea>
                    <span class="span-error"></span>
                </div>

                <div class="input">
                    <span>História da doença atual *</span>
                    <textarea name="doenca_atual" id="doencaAtual" rows="5"><?=$prontuario['doenca_atual'] ?? null ?></textarea>
                    <span class="span-error"></span>
                </div>

                <div class="gridSection grow4">
                    <div class="input">
                        <span>Hemorragia *</span>
                        <select name="hemorragia" id="hemorragia" required>
                            <option value=""></option>
                            <option <?= $prontuario['hemorragia'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['hemorragia'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Alergias</span>
                        <select name="alergia" id="alergia" required>
                            <option value=""></option>
                            <option <?= $prontuario['alergia'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['alergia'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Reumatismo infeccioso</span>
                        <select name="reumatismo" id="reumatismo" required>
                            <option value=""></option>
                            <option <?= $prontuario['reumatismo'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['reumatismo'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Distúrbio cardiovascular</span>
                        <select name="cardiovascular" id="cardiovascular" required>
                            <option value=""></option>
                            <option <?= $prontuario['cardiovascular'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['cardiovascular'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="gridSection grow4">
                    <div class="input">
                        <span>Gastrite</span>
                        <select name="gastrite" id="gastrite" required>
                            <option value=""></option>
                            <option <?= $prontuario['gastrite'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['gastrite'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Diabético</span>
                        <select name="diabetico" id="diabetico" required>
                            <option value=""></option>
                            <option <?= $prontuario['diabetico'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['diabetico'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Desmaiou</span>
                        <select name="desmaiou" id="desmaiou" required>
                            <option value=""></option>
                            <option <?= $prontuario['desmaiou'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['desmaiou'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Tratamentos Médicos</span>
                        <select name="tratamentos" id="tratamentos" required>
                            <option value=""></option>
                            <option <?= $prontuario['tratamentos'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['tratamentos'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="gridSection grow4">
                    <div class="input">
                        <span>Ingerindo Medicamentos</span>
                        <select name="medicamentos" id="medicamentos" required>
                            <option value=""></option>
                            <option <?= $prontuario['medicamentos'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['medicamentos'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Doenças ou cirurgias</span>
                        <select name="doencas_ou_cirurgias" id="doencasoucirurgias" required>
                            <option value=""></option>
                            <option <?= $prontuario['doencas_ou_cirurgias'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['doencas_ou_cirurgias'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Vícios</span>
                        <select name="vicios" id="vicios" required>
                            <option value=""></option>
                            <option <?= $prontuario['vicios'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['vicios'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Ansiedade/depressão</span>
                        <select name="ansiedade" id="ansiedade" required>
                            <option value=""></option>
                            <option <?= $prontuario['ansiedade'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['ansiedade'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="titleSection">
                    <h1>Você e/ou algum familiar  teve algumas dessas doenças</h1>
                </div>

                <div class="gridSection grow4">
                    <div class="input">
                        <span>Tuberculose</span>
                        <select name="tuberculose" id="tuberculose" required>
                            <option value=""></option>
                            <option <?= $prontuario['tuberculose'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['tuberculose'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Sífilis</span>
                        <select name="sifilis" id="sifilis" required>
                            <option value=""></option>
                            <option <?= $prontuario['sifilis'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['sifilis'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Hepatite A, B, C</span>
                        <select name="hepatite" id="hepatite" required>
                            <option value=""></option>
                            <option <?= $prontuario['hepatite'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['hepatite'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>SIDA/AIDS</span>
                        <select name="sida_aids" id="sida-aids" required>
                            <option value=""></option>
                            <option <?= $prontuario['sida_aids'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['sida_aids'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="gridSection grow4">
                    <div class="input">
                        <span>Sarampo</span>
                        <select name="sarampo" id="sarampo" required>
                            <option value=""></option>
                            <option <?= $prontuario['sarampo'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['sarampo'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Caxumba</span>
                        <select name="caxumba" id="caxumba" required>
                            <option value=""></option>
                            <option <?= $prontuario['caxumba'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['caxumba'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Varicela</span>
                        <select name="varicela" id="varicela" required>
                            <option value=""></option>
                            <option <?= $prontuario['varicela'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['varicela'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Outras</span>
                        <input type="text" name="outras_doencas" required value="<?=$prontuario['outras_doencas'] ?? null?>">
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="gridSection grow2">
                    <div class="input">
                        <span>Fumante</span>
                        <select name="fumante" id="fumante" required>
                            <option value=""></option>
                            <option <?= $prontuario['fumante'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['fumante'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Frequência/dia</span>
                        <input type="text" name="frequencia" required value="<?=$prontuario['frequencia'] ?? null?>">
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="titleSection">
                    <h1>Questionário complementar infantil - ODONTOPEDIATRIA</h1>
                </div>

                <div class="input">
                    <span>História da gestação</span>
                    <textarea name="gestacao" id="gestacao" rows="5"><?=$prontuario['gestacao'] ?? null ?></textarea>
                    <span class="span-error"></span>
                </div>

                <div class="gridSection grow4">
                    <div class="input">
                        <span>Tipo de parto</span>
                        <select name="parto" id="parto" required>
                            <option value=""></option>
                            <option <?= $prontuario['parto'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['parto'] == 'F' ? 'selected' : ''?> value="F">Fórceps</option>
                            <option <?= $prontuario['parto'] == 'C' ? 'selected' : ''?> value="C">Cesariana</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Problemas no parto</span>
                        <select name="parto_problemas" id="partoProblemas" required>
                            <option value=""></option>
                            <option <?= $prontuario['parto_problemas'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['parto_problemas'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Amamentação</span>
                        <select name="amamentacao" id="amamentacao" required>
                            <option value=""></option>
                            <option <?= $prontuario['amamentacao'] == 'N' ? 'selected' : ''?> value="N">Natural</option>
                            <option <?= $prontuario['amamentacao'] == 'M' ? 'selected' : ''?> value="M">Mamadeira</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Até a idade de</span>
                        <input type="number" min="0" max="10" name="amamentacao_idade" required value="<?=$prontuario['amamentacao_idade'] ?? null?>">
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="gridSection grow3">
                    <div class="input">
                        <span>Anestesia</span>
                        <select name="anestesia" id="anestesia" required>
                            <option value=""></option>
                            <option <?= $prontuario['anestesia'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['anestesia'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Convivio com doenças graves e contagiosas</span>
                        <select name="graves_contagiosas" id="gravesContagiosas" required>
                            <option value=""></option>
                            <option <?= $prontuario['graves_contagiosas'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['graves_contagiosas'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Criança vacinada</span>
                        <select name="vacina" id="vacina" required>
                            <option value=""></option>
                            <option <?= $prontuario['vacina'] == 'S' ? 'selected' : ''?> value="S">Sim</option>
                            <option <?= $prontuario['vacina'] == 'N' ? 'selected' : ''?> value="N">Não</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="titleSection">
                    <h1>Exame Físico</h1>
                </div>

                <div class="gridSection grow4">
                    <div class="input">
                        <span>Lábios</span>
                        <select name="labios" id="labios" required>
                            <option value=""></option>
                            <option <?= $prontuario['labios'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['labios'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Mucosa Jugal</span>
                        <select name="mucosa_jugal" id="mucosaJugal" required>
                            <option value=""></option>
                            <option <?= $prontuario['mucosa_jugal'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['mucosa_jugal'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Língua</span>
                        <select name="lingua" id="lingua" required>
                            <option value=""></option>
                            <option <?= $prontuario['lingua'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['lingua'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Soalho da boca</span>
                        <select name="soalho_boca" id="soalhoBoca" required>
                            <option value=""></option>
                            <option <?= $prontuario['soalho_boca'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['soalho_boca'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="gridSection grow4">
                    <div class="input">
                        <span>Garganta</span>
                        <select name="garganta" id="garganta" required>
                            <option value=""></option>
                            <option <?= $prontuario['garganta'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['garganta'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Palato mole</span>
                        <select name="palato_mole" id="palatoMole" required>
                            <option value=""></option>
                            <option <?= $prontuario['palato_mole'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['palato_mole'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Mucosa Alveolar</span>
                        <select name="mucosa_alveolar" id="mucosaAlveolar" required>
                            <option value=""></option>
                            <option <?= $prontuario['mucosa_alveolar'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['mucosa_alveolar'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Gengivas</span>
                        <select name="gengivas" id="gengivas" required>
                            <option value=""></option>
                            <option <?= $prontuario['gengivas'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['gengivas'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="gridSection grow4">
                    <div class="input">
                        <span>Glândulas Salivares</span>
                        <select name="glandulas_salivares" id="glandulasSalivares" required>
                            <option value=""></option>
                            <option <?= $prontuario['glandulas_salivares'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['glandulas_salivares'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Linfonodos</span>
                        <select name="linfonodos" id="linfonodos" required>
                            <option value=""></option>
                            <option <?= $prontuario['linfonodos'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['linfonodos'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>ATM</span>
                        <select name="atm" id="atm" required>
                            <option value=""></option>
                            <option <?= $prontuario['atm'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['atm'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Músculos Mastigadores</span>
                        <select name="musculos_mastigadores" id="musculosMastigadores" required>
                            <option value=""></option>
                            <option <?= $prontuario['musculos_mastigadores'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['musculos_mastigadores'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="gridSection grow2">
                    <div class="input">
                        <span>Palato duro</span>
                        <select name="palato_duro" id="palatoDuro" required>
                            <option value=""></option>
                            <option <?= $prontuario['palato_duro'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['palato_duro'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Oclusão</span>
                        <select name="oclusao" id="oclusao" required>
                            <option value=""></option>
                            <option <?= $prontuario['oclusao'] == 'N' ? 'selected' : ''?> value="N">Normal</option>
                            <option <?= $prontuario['oclusao'] == 'A' ? 'selected' : ''?> value="A">Alterado</option>
                        </select>
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="input">
                    <span>Alterações encontradas</span>
                    <textarea name="alteracoes" id="alteracoes" rows="5"><?=$prontuario['alteracoes'] ?? null ?></textarea>
                    <span class="span-error"></span>
                </div>

                <div class="titleSection">
                    <h1>Pressão arterial</h1>
                </div>

                <div class="gridSection grow2">
                    <div class="input">
                        <span>Máxima (mmHG)</span>
                        <input type="text" name="pressao_maxima" required value="<?=$prontuario['pressao_maxima'] ?? null?>">
                        <span class="span-error"></span>
                    </div>
                    <div class="input">
                        <span>Mínima (mmHG)</span>
                        <input type="text" name="pressao_minima" required value="<?=$prontuario['pressao_minima'] ?? null?>">
                        <span class="span-error"></span>
                    </div>
                </div>

                <div class="input">
                    <span>Diagnóstico presuntivo</span>
                    <textarea name="diagnostico_presuntivo" id="diagnosticoPresuntivo" rows="5"><?=$prontuario['diagnostico_presuntivo'] ?? null ?></textarea>
                    <span class="span-error"></span>
                </div>

                <div class="input">
                    <span>Exames complementares</span>
                    <textarea name="exames_complementares" id="examesComplementares" rows="5"><?=$prontuario['exames_complementares'] ?? null ?></textarea>
                    <span class="span-error"></span>
                </div>

                <div class="input">
                    <span>Diagnóstico definitivo</span>
                    <textarea name="diagnostico_definitivo" id="diagnosticoDefinitivo" rows="5"><?=$prontuario['diagnostico_definitivo'] ?? null ?></textarea>
                    <span class="span-error"></span>
                </div>

                <div class="input">
                    <span>Tratamento/Proservação</span>
                    <textarea name="tratamento_proservacao" id="tratamentoProservacao" rows="5"><?=$prontuario['tratamento_proservacao'] ?? null ?></textarea>
                    <span class="span-error"></span>
                </div>

                <div class="input">
                    <span>Plano de Tratamento</span>
                    <textarea name="plano_tratamento" id="planoTratamento" rows="7"><?=$prontuario['plano_tratamento'] ?? null ?></textarea>
                    <span class="span-error"></span>
                </div>

                <div class="actionButton">
                    <button type="submit">Cadastrar</button>
                    <button type="reset" class="button-error">Limpar</button>
                </div>
            </div>
        </form>
        </section>