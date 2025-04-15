<?php

    /**
     * renderizarBotao
     * 
     * @param string $tipo - tipo do botão (primary, secondary)
     * 
     * @return string - HTML para renderizar o botão
     */
    function renderizarBotao($tipo, $conteudo) {
        switch ($tipo) {
            case 'primary':
                $class = 'button button-primary';
                break;
            case 'secondary':
                $class = 'button button-secondary';
                break;
            default:
                $class = 'button button-primary';
                break;
        }

        return "<button class='$class'>$conteudo</button>";
    }

?>