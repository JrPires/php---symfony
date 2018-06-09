<?php


namespace Infrastructure\Service;


use Domain\Model\Inscricao;

class EmailService
{
    public function enviarNotificacaoInscricao(Inscricao $inscricao)
    {
    $candidato = $inscricao->getCandidato();
    $destinatario = $candidato->getEmail();
    $nomeDestinariario = $candidato->getNome();
    $assunto = "Inscricao de Emprego - Código de Confirmação";
    $corpoDeEmail = "Olá, ".$nomeDestinariario . "\n"
    . "seu código de confirmação de inscrição é: ". $inscricao->getCodigoDeConfirmacao();

    $this->enviarNotificacao($destinatario, $nomeDestinariario, $assunto, $corpoDeEmail);
    }

    public function enviarNotificacao(
        string $destinatario,
        string $nomeDestinatario,
        string $assunto,
        string $corpoDoEmail
    ) {
        //criação de transpot, mail.smtp2go, mailgun, etc.
        $transport = (new
        \Swift_SmtpTransport('mail.smtp2go.com', 2525))
            ->setUsername('martin.pfeifer@publicsoft.com.br')
            ->setPassword('UU2aCnYy0FYm');
        $mailer = new \Swift_Mailer($transport);

        // criação de menssagem
        $message = new \Swift_Message($assunto);

        $message->setFrom(["suporte.inscricao@hotmail.com" => "Suporte - Inscrição Emprego"])
            ->setTo([$destinatario => $nomeDestinatario])
            ->setBody($corpoDoEmail);

        // Dispara o email
        $mailer->send($message);
    }

}