<?php

    include_once '../DB.php';

    class modeloAluno extends DB {

        public static $tabela = 'tb_alunos';

        public static function getAlunos() {

            return parent::selectAll(self::$tabela, "ORDER BY id desc");
        }

        public static function findAluno($id) {

            return parent::selectFind(self::$tabela, $id);
        }

        public static function addAluno($dados_aluno) {

            return parent::insert(self::$tabela, $dados_aluno);
        }

        public static function upAluno($dados) {

            return parent::update(self::$tabela, $dados);
        }

        public static function delAluno($id) {

            return parent::delete(self::$tabela, $id);
        }
    }
