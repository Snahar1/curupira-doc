## 🌿 Guardião da Identidade Visual e Documentação Nativa do Ecossistema Scorpion.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892bf.svg)](https://www.php.net/)

O **CurupiraDoc** é a biblioteca oficial de identidade visual técnica e documentação do **Ecossistema Scorpion**. Inspirado na lenda do guardião das florestas, esta lib protege a integridade do projeto, garantindo que cada função, classe e erro tenha uma assinatura clara, rastreável e visualmente padronizada no padrão **JAPURA**.

---

## ✨ Funcionalidades:

- **FlashCards JAPURA:** Interface de alertas (Sucesso, Erro, Info, Alerta) com estilo dark mode nativo.
- **Auditoria Nativa:** Método `registrarAcesso()` para telemetria de uso do framework.
- **Rastreabilidade de Erros:** Formatação amigável para logs técnicos.
- **Introspeção de Código:** Padronização visual para comentários e documentação de métodos.

## 🛠️ Instalação via Docas:

Adicione a dependência ao seu arquivo `docas.json`:

`json
"require": {
    "snahar/curupira-doc": "1.0.0"
}`

## Execute o motor de instalação:
`instalador_docas.bat`

## 📖 Como Utilizar:
1. Alertas Visuais (FlashCards):
    Utilize para feedbacks imediatos na interface.
    Nota: Certifique-se de chamar este método dentro do <body> da sua página para manter a fidelidade do layout.

```
use CurupiraDoc\Escritor;
echo Escritor::flashCard('sucesso', 'Operação realizada com êxito!');
```

2. Auditoria e Logs:
    Registra o uso de um método específico para auditoria interna
   
`Escritor::registrarAcesso('IcoaraciDB::connect');`

## 🤝 Ecossistema: 
Esta biblioteca faz parte do universo Scorpion e integra-se com:
```
    BanzeiroLogs: Para persistência física dos acessos.
    VeroEnv: Para alertas visuais de erro em variáveis de ambiente.
```

## ⚖️ Licença: 
Este projeto está sob a licença MIT.

---

Desenvolvido com 🦂 por Sérgio Nahar
