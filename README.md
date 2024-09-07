# CatalogRuleGrid

Este módulo para Magento 2 é uma melhoria para a grid padrão de regras de catálogo. Ele adiciona uma funcionalidade que permite ao usuário visualizar uma descrição breve das regras diretamente na tela da grid, sem precisar sair da página. Isso torna a gestão de regras de catálogo mais eficiente e intuitiva.

## Recursos

- **Visualização de Descrição Breve**: Permite que os usuários vejam uma descrição resumida das regras de catálogo diretamente na grid.
- **Interface Intuitiva**: Melhora a usabilidade ao exibir informações adicionais sem a necessidade de navegar para outra página.
- **Compatibilidade**: Projetado para funcionar com a versão padrão do Magento 2.4.x e PHP 8.0+.

## Instalação

1. **Baixe o módulo**: Você pode baixar o código-fonte diretamente do repositório GitHub.

2. **Instale o módulo**:
    - Copie a pasta `CatalogRuleGrid` para o diretório `app/code/FreireH/` da sua instalação Magento.
    - No terminal, navegue até a raiz da instalação Magento e execute os seguintes comandos:

      ```bash
      php bin/magento module:enable FreireH_CatalogRuleGrid
      php bin/magento setup:di:compile
      ```

3. **Limpe o cache**:
    - No terminal, execute:
 
      ```bash
      php bin/magento cache:clean
      ```

## Uso

Após a instalação do módulo, a grid padrão de regras de catálogo será atualizada.

## Configuração

Este módulo não requer configuração adicional para ser utilizado. Após a instalação, a funcionalidade será adicionada automaticamente à grid de regras de catálogo.

## Contribuindo

Se você deseja contribuir para o desenvolvimento deste módulo, por favor sinta-se a vontade.