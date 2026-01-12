<?php

namespace CurupiraDoc;

use ReflectionClass;

class Escritor
{
    private static $versaoDoc = "3.1.0";

    /**
     * 🦂 SCORPION: documentarObjeto()
     * 📜 @description Gera uma documentação técnica instantânea de qualquer classe.
     * 📥 @param object $objeto A instância da classe a ser analisada.
     */
    public static function documentarObjeto($objeto): string
    {
        $reflect = new ReflectionClass($objeto);
        $metodos = $reflect->getMethods();
        
        $html = "<div style='background: #1e1e1e; color: #fff; padding: 15px; border-radius: 8px;'>";
        $html .= "<h3>🌿 CurupiraDoc: Mapa da Classe " . $reflect->getShortName() . "</h3>";
        
        foreach ($metodos as $metodo) {
            $cor = $metodo->isPublic() ? '#18bc9c' : '#f1c40f';
            $html .= "<li><span style='color: {$cor}'>[{$metodo->getName()}]</span></li>";
        }
        
        return $html . "</div>";
    }

    /**
     * ⚠️ AVISO DE OBSOLESCÊNCIA
     * 📜 @description Alerta que um método será removido em versões futuras.
     */
    public static function avisoDepreciado(string $metodo, string $alternativa): string
    {
        return self::flashCard('alerta', "O método <b>{$metodo}</b> está depreciado. Utilize <u>{$alternativa}</u> no lugar.");
    }

  /**
     * 🦂 SCORPION: flashCard()
     * --------------------------------------------------------------------------
     * @author Sérgio Nahar <sergio.ac.nahar@gmail.com>
     * @package Scorpion Project v3.0
     * 📜 @description Gera um alerta visual formatando (Flash Card) para o sistema.
     * 📥 @param string $tipo (sucesso, erro, info, alerta)
     * 📥 @param string $mensagem O texto a ser exibido no Card
     * 📥 @return string Retorna o HTML estruturado com cores e emojis
     * --------------------------------------------------------------------------
     */
    public static function flashCard(string $tipo, string $mensagem): string
    {
        // 🔐 JAPURA: Configurações visuais baseadas nas tags do Better Comments
        $config = [
            'sucesso' => ['emoji' => '✅', 'cor' => '#18bc9c', 'titulo' => 'SUCESSO'],
            'erro' => ['emoji' => '🔴', 'cor' => '#e74c3c', 'titulo' => 'ERRO CRÍTICO'],
            'info' => ['emoji' => '📑', 'cor' => '#3498db', 'titulo' => 'INFORMAÇÃO'],
            'alerta' => ['emoji' => '🟡', 'cor' => '#f1c40f', 'titulo' => 'ADVERTÊNCIA'],
        ];

        $estilo = $config[$tipo] ?? $config['info'];

        return "<div style='border-left: 6px solid {$estilo['cor']};
            background: #1e1e1e; color: #ecf0f1; padding: 20px; margin: 15px 0; font-family: \"Segoe UI\", Tahoma, sans-serif; border-radius: 4px; box-shadow: 0 4px 6px rgba(0,0,0,0.3);'>
            <div style='color: {$estilo['cor']}; font-weight: bold; margin-bottom: 8px; font-size: 1.1em;'>{$estilo['emoji']} {$estilo['titulo']}</div>
            
            <div style='line-height: 1.5;'>{$mensagem}</div>
            </div>";
    }

   /**
     * ⚓ ICOARACI: registrarAcesso()
     * 📝 @description Registra que uma parte documentada do código foi acessada.
     * Integra-se nativamente com a Lib BanzeiroLogs para persistência de auditoria.
     * 📥 @param string $origem Nome da classe ou método
     * 📤 @return void
     */
  public function registrarAcesso(string $origem): void
    {
      $data = date('Y-m-d H:i:s');
        $mensagem = "Acesso documentado em: {$origem} às {$data}";
      
        // Verifica se a classe do Registrador do Banzeiro existe no sistema
        if (class_exists('\\BanzeiroLogs\\Registrador')) {
          // Chama o método estático de salvar do Banzeiro
            \BanzeiroLogs\Registrador::salvar($mensagem, 'auditoria');
        }} else {
            // Caso o Banzeiro não esteja instalado, o Curupira apenas 
            // prepara o rastro para o log do PHP ou debug
            error_log("🌿 CurupiraDoc Auditoria: " . $mensagem);
        }
  
}
