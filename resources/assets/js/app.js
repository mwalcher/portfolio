'use strict';

NodeList.prototype.forEach = NodeList.prototype.forEach || Array.prototype.forEach;

import headerInteractions from './components/header-interactions';
import formInteractions from './components/form-interactions';

document.addEventListener('readystatechange', function(){
    if(document.readyState === 'complete'){

        // Header Component
        headerInteractions();

        // Forms
        formInteractions();
    }
});
