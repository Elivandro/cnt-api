import './bootstrap';
import Alpine from 'alpinejs'
import Clipboard from "@ryangjchandler/alpine-clipboard"

Alpine.plugin(Clipboard.configure({
    onCopy: () => {
        console.log('Copied!')
    }
}))

window.Alpine = Alpine

Alpine.start();
