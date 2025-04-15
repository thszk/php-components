<?php

    /**
     * Renderiza um componente de botão
     * 
     * @param string $type - tipo do botão (primary, secondary, action)
     * @param string $content - conteúdo para ser renderizado, podendo ser um texto ou HTML
     * 
     * @return string - HTML para renderizar o botão
     */
    function renderButton($type, $content) {
        switch ($type) {
            case 'primary':
                $class = 'button button-primary';
                break;
            case 'secondary':
                $class = 'button button-secondary';
                break;
            case 'action':
                $class = 'button button-action';
                break;
            default:
                $class = 'button button-primary';
                break;
        }

        return "<button class='$class'>$content</button>";
    }

?>