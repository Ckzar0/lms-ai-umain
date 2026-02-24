<?php
require_once(__DIR__ . '/../../config.php');
require_login();

echo $OUTPUT->header();
?>
<div class="ai-course-creator">
    <h2>🤖 Criador de Cursos AI</h2>
    
    <form method="post" enctype="multipart/form-data">
        <h3>📄 Upload conteúdo</h3>
        <input type="file" name="pdf_file" accept=".pdf,.docx">
        
        <h3>⚙️ Configurações</h3>
        Duração: <input type="number" name="weeks" value="4" min="1"> semanas<br>
        Dificuldade: 
        <select name="difficulty">
            <option value="easy">Fácil</option>
            <option value="medium">Médio</option>
            <option value="hard">Avançado</option>
        </select><br>
        
        Imagens: 
        <input type="radio" name="images" value="file" checked> Do ficheiro
        <input type="radio" name="images" value="stock"> Stock AI
        <input type="radio" name="images" value="none"> Sem imagens<br>
        
        Quiz: 
        <input type="checkbox" name="quiz"> Sim 
        <input type="number" name="quiz_questions" value="10" min="5" max="50"><br>
        
        <button type="submit" name="generate">🚀 Gerar Curso AI</button>
    </form>
</div>
<?php
echo $OUTPUT->footer();
?>
