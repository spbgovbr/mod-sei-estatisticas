<?
/**
 * TRIBUNAL REGIONAL FEDERAL DA 4� REGI�O
 *
 * 29/04/2016 - criado por mga@trf4.jus.br
 *
 */


class MdEstatisticas extends SeiIntegracao{

  public function __construct(){
  }

  public function getNome(){
    return 'M�dulo de Estatisticas do SEI';
  }

  public function getVersao() {
    return '1.1.6';
  }

  public function getInstituicao(){
    return 'MPDG - Minist�rio do Planejamento, Desenvolvimento e Gest�o';
  }

  public function inicializar($strVersaoSEI){
    /*
    if (substr($strVersaoSEI, 0, 2) != '3.'){
      die('M�dulo "'.$this->getNome().'" ('.$this->getVersao().') n�o � compat�vel com esta vers�o do SEI ('.$strVersaoSEI.').');
    }
     */
  }
}
?>
