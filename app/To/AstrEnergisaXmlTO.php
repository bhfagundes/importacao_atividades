<?php

namespace App\To;


/**
 * Classe de envio xml energisa
 *
 * @package App\To
 * @author Squadra Tecnologia S/A.
 */
class AstrEnergisaXmlTO
{
    /**
     * @var string $xmlBase64
     *
     * @JMS\SerializedName("ablb_xml")
     */
    public $xmlBase64;

    /**
     * @var string $extensaoArquivo
     *
     * @JMS\SerializedName("as_dsc_extensao")
     */
    public $extensaoArquivo;

    /**
     * @var string $arquivoEletronico
     *
     * @JMS\SerializedName("as_doc_eletronico")
     */
    public $arquivoEletronico;

    /**
     * @var string $erroNota
     *
     * @JMS\SerializedName("as_erro_nota")
     */
    public $erroNota;

    /**
     * @var string $mensagemNota
     *
     * @JMS\SerializedName("as_msg_nota")
     */
    public $mensagemNota;

    /**
     * @return string
     */
    public function getXmlBase64()
    {
        return $this->xmlBase64;
    }

    /**
     * @param string $xmlBase64
     */
    public function setXmlBase64($xmlBase64)
    {
        $this->xmlBase64 = $xmlBase64;
    }

    /**
     * @return string
     */
    public function getExtensaoArquivo()
    {
        return $this->extensaoArquivo;
    }

    /**
     * @param string $extensaoArquivo
     */
    public function setExtensaoArquivo($extensaoArquivo)
    {
        $this->extensaoArquivo = $extensaoArquivo;
    }

    /**
     * @return string
     */
    public function getArquivoEletronico()
    {
        return $this->arquivoEletronico;
    }

    /**
     * @param string $arquivoEletronico
     */
    public function setArquivoEletronico($arquivoEletronico)
    {
        $this->arquivoEletronico = $arquivoEletronico;
    }

    /**
     * @return string
     */
    public function getErroNota()
    {
        return $this->erroNota;
    }

    /**
     * @param string $erroNota
     */
    public function setErroNota($erroNota)
    {
        $this->erroNota = $erroNota;
    }

    /**
     * @return string
     */
    public function getMensagemNota()
    {
        return $this->mensagemNota;
    }

    /**
     * @param string $mensagemNota
     */
    public function setMensagemNota($mensagemNota)
    {
        $this->mensagemNota = $mensagemNota;
    }
}
