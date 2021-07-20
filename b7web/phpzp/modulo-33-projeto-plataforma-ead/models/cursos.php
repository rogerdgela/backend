<?php

class Cursos extends model
{
    public function getCursosDoAluno($id)
    {
        $dados = [];
        $sql = "SELECT aluno_curso.id_curso,
                       cursos.nome,
                       cursos.imagem,
                       cursos.descricao
                FROM aluno_curso
                LEFT JOIN cursos 
                ON aluno_curso.id_curso = cursos.id
                WHERE aluno_curso.id_aluno = '$id'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $dados;
    }
}
?>