# 🌿 CurupiraDoc — O Guardião do Código

O **CurupiraDoc** é o motor de identidade visual técnica e documentação nativa do Ecossistema Scorpion. Assim como o Curupira protege a floresta, esta biblioteca protege a integridade e a rastreabilidade do seu código, garantindo que cada função, classe e erro tenha uma identidade clara e padronizada no padrão **JAPURA**.

---

## 🚀 Funcionalidades Principal

- **FlashCards Visuais:** Alertas de sucesso, erro, info e advertência com interface moderna para sistemas administrativos.
- **Auditoria de Acesso:** Rastreia quais partes do framework estão a ser utilizadas em tempo real.
- **Integração Nativa:** Preparado para comunicar com a biblioteca `BanzeiroLogs` para persistência de dados.
- **Padronização JAPURA:** Tags de comentários otimizadas para leitura técnica (⚓ ICOARACI, 🦂 SCORPION).

## 🛠️ Instalação via Docas

Adicione a dependência no seu arquivo `docas.json`:

```json
"require": {
    "snahar/curupira-doc": "1.0.0"
}

Execute o motor de instalação:
instalador_docas.bat

📖 Como Utilizar:
1. Alertas Visuais (FlashCards)
Ideal para retornos de formulários e avisos de sistema.

use CurupiraDoc\Escritor;

echo Escritor::flashCard('sucesso', 'Operação realizada com êxito!');
echo Escritor::flashCard('erro', 'Falha crítica ao acessar o núcleo do sistema.');

2. Auditoria de Uso:
Utilizado para criar rastros de segurança e telemetria de uso do código.

// Registra o uso de um método específico
Escritor::registrarAcesso('IcoaraciDB::delete');

🤝 Ecossistema e Integrações

O CurupiraDoc atua como a "voz" visual de outras bibliotecas:

    BanzeiroLogs: Recebe os dados de registrarAcesso para persistência em disco.
    VeroEnv: Utiliza os FlashCards para reportar falhas em chaves de ambiente (.env).
    IcoaraciDB: Utiliza o padrão de documentação para exibir queries e erros de transação.

⚖️ Licença

Este projeto está sob a licença MIT. Veja o arquivo LICENSE para detalhes.

Desenvolvido com 🦂 por Sérgio Nahar — Transformando código em ecossistema.
