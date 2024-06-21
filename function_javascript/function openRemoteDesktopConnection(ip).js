function abrirMaquinaVirtual() {
  // Obtém a planilha ativa
  var planilha = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
  
  // Obtém a célula ativa (a célula clicada)
  var celulaAtiva = planilha.getActiveCell();
  
  // Obtém o valor (IP) da célula ativa
  var ip = celulaAtiva.getValue();
  
  // Chama a função para abrir a máquina virtual usando o IP
  abrirMaquinaVirtualExternamente(ip);
}

function abrirMaquinaVirtualExternamente(ip) {
  // Construa o URL com base no IP e no protocolo rdm
  var url = "rdm://" + ip;
  
  // Abra a URL no navegador padrão
  abrirURLNoNavegador(url);
}

function abrirURLNoNavegador(url) {
  // Abre a URL no navegador padrão
  var html = HtmlService.createHtmlOutput('<script>window.location.href="' + url + '";</script>')
      .setWidth(1)
      .setHeight(1);
  SpreadsheetApp.getUi().showModalDialog(html, 'Abrindo a Máquina Virtual');
}
