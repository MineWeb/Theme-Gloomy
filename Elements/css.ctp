<style>
    /*Loader*/
    #preloder {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 999999;
        background: #000;
    }
    .loader {
        width: 40px;
        height: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -13px;
        margin-left: -13px;
        border-radius: 60px;
        animation: loader .8s linear infinite;
    -webkit-animation: loader .8s linear infinite;
    }
    @keyframes loader {
	    0% {
		    -webkit-transform: rotate(0deg);
    		transform: rotate(0deg);
		    border: 4px solid #f44336;
		    border-left-color: transparent;
    	}
    	50% {
		    -webkit-transform: rotate(180deg);
		    transform: rotate(180deg);
		    border: 4px solid #673ab7;
		    border-left-color: transparent;
	    }
	    100% {
    		-webkit-transform: rotate(360deg);
		    transform: rotate(360deg);
		    border: 4px solid #f44336;
		    border-left-color: transparent;
	    }
    }

    @-webkit-keyframes loader {
    	0% {
		    -webkit-transform: rotate(0deg);
		    border: 4px solid #f44336;
		    border-left-color: transparent;
	    }
	    50% {
    		-webkit-transform: rotate(180deg);
		    border: 4px solid #673ab7;
		    border-left-color: transparent;
	    }
	    100% {
    		-webkit-transform: rotate(360deg);
		    border: 4px solid #f44336;
		    border-left-color: transparent;
	    }
    }
    /*NavBar*/
    /*TopBar*/
    header {
        display: block;
    }
    .ht-options {
        background: #080808;
        padding: 13px 0;
        font-family: cinzel,serif;
    }
    .ht-options .ht-widget ul a {
        font-size: 13px;
        color: #c4c4c4;
        list-style: none;
        display: inline-block;
        margin-right: 30px;
        position: relative;
    }
    .ht-options .ht-widget ul a span {
        font-size: 14px;
        color: #eaeaea;
    }
    .ht-options .ht-social {
        text-align: right;
    }
    .ht-options .ht-social a {
        font-size: 14px;
        color: #fff;
        display: inline-block;
        margin-left: 9px;
    }
    /*LogoBar*/

    .logo {
        background: #0d0d0d;
        padding: 44px 0;
    }
    .logo a {
        display: inline-block;
    }
    /*NavBar*/
    .nav-options {
        background: #9e0303;
        padding: 10px 0;
    }
    .nav-options .nav-menu {
        text-align: center;
    }
    .nav-options .nav-menu ul li {
        list-style: none;
        display: inline-block;
        margin-right: 4px;
        position: relative;
    }
    .nav-options .nav-menu ul li.mega-menu {
        position: static;
    }
    .nav-options .nav-menu ul li a span {
        -webkit-transform: skewX(15deg);
        -ms-transform: skewX(15deg);
        transform: skewX(15deg);
        display: inline-block;
    }
    .nav-options .nav-menu ul li a {
        font-size: 15px;
        color: #fff;
        font-family: cinzel,serif;
        text-transform: uppercase;
        padding: 17px 15px 13px 30px;
        display: inline-block;
        background: #a81d1d;
        -webkit-transform: skewX(-15deg);
        -ms-transform: skewX(-15deg);
        transform: skewX(-15deg);
        -webkit-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s;
    }
    .nav-options .nav-menu ul li:hover>a {
        background: #c20000;
        text-shadow: 1px 0 0 #fff;
    }


    /*Banner*/

    .hero-section {
        position: relative;
        padding: 140px 0;
    }
    .hero-section .container {
        position: relative;
        z-index: 9;
    }
    .hs-text {
        padding-top: 1px;
        margin-bottom: 50px;
    }
    .hs-text .label {
        display: inline-block;
        padding: 4px 7px 4px 12px;
        background: rgba(194,0,0,.3);
        -webkit-transform: skewX(-15deg);
        -ms-transform: skewX(-15deg);
        transform: skewX(-15deg);
        font-family: cinzel,serif;
    }
    .hs-text h3 {
        color: #fff;
        line-height: 42px;
        text-transform: uppercase;
        font-weight: 700;
        margin-top: 18px;
        margin-bottom: 20px;
        font-family: cinzel,serif;
    }
    .hero-section {
        background-image: url(<?= $theme_config['img_bg'] ?>);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;
    }

    /*News*/

    .card {
        background-color: #0d0d0d;
        font-family: cinzel,serif;
    }

    /*Reseaux*/
    .btn-o {
    max-width: 100%;
    display: none;
    }
    /*Top 3 Voteurs*/

    .player-info {
        display: flex;
    }
    .title-votes {
        display: inline-block;
        width: 48px;
        height: 48px;
        max-width: 48px;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 48px;
        flex: 0 0 48px;
    }
    .player-name {
        text-transform: uppercase;
        color: #fff;
        position: relative;
        padding: 12px 33px 0 15px;
        height: 100%;
        width: 100%;
        max-width: 100%;
        font-weight: 500;
        font-size: 14px;
    }
    #votes {
        display: block;
        font-weight: 400;
        font-size: 11px;
        color: #969696;
        line-height: 1.2;
        margin-left: 50px;
        padding-bottom: 10px;
        margin-top: -10px;
    }

    /*Footer*/

    .footer-section, .footer-about p {
        font-family: cinzel,serif;
    }

    /*Other*/
    .btn-primary, .btn-success, .lead, .btn, .list-group, .alert {
        font-size: initial;
    }
    .dropdown-toggle::after {
        display: none;
    }
    .btn-success, .btn-primary:hover, .btn-success:not(:disabled):not(.disabled):active, .btn-primary:focus, .btn-success:not(:disabled):not(.disabled):active:focus {
        background-color: #a81d1d;
        border-color: #9e0303;
        box-shadow: 0 0 0 0.2rem #a81d1d;
    }
    .btn-primary, .btn-theme, .btn-success:hover, .btn-primary:not(:disabled):not(.disabled):active, .btn-success:focus, .btn-primary:not(:disabled):not(.disabled):active:focus {
        background-color: #9e0303;
        border-color: #580f08;
        box-shadow: 0 0 0 0.2rem #9e0303;
    }
    ul, ol {
        padding: 0;
        margin: 0;
    }
    body {
        background-color: #0d0d0d;
    }
    h1, h2, h3, h4, h5, h6 {
        color: #c4c4c4;
    }
    .thumbnail {
        background-color: #0d0d0d;
    }
/*Plugin*/
    /*SHOP*/
    .plugin-shop, .lead {
        font-family: cinzel,serif;
    }
    .lead {
        font-size: 24px;
    }
    .progress {
        display: -ms-flexbox;
        display: flex;
        height: 2rem;
        overflow: hidden;
        font-size: .75rem;
        background-color: #c4c4d9;
        border-radius: .25rem;
        font-size: initial;
    }
    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgb(196, 196, 196);
    }
    .progress-bar-info {
        background-color: #a81d1d;
    }
    .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #a81d1d;
        border-color: #9e0303;
    }
    .panel-default > .panel-heading, .panel-body {
        color: #333;
        background-color: #0d0d0d;
        border-color: #ddd;
    }
    .btn.focus, .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgb(88, 15, 8);
    }
    .btn:focus, .btn:active:focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn.active.focus {
        outline: thin dotted;
        outline: 5px -webkit-focus-ring-color;
        outline-offset: -2px;
    }
    /*Modal*/

    .modal-content {
        background-color: #111111;
    }
    .checkbox {
        color: #c4c4c4;
        font-size: initial;
    }
    .form-control:focus {
        background-color: #0d0d0d;
        border-color: #80bdff;
    }
    .btn-default:hover {
        color: #333;
        background-color: #c4c4c4;
        border-color: #c4c4c4;
    }
    .btn-primary.disabled:hover, .btn-primary.disabled {
        background-color: #a81d1d;
        border-color: #9e0303;
    }

    /*VOTE*/
    .form-control:disabled, .form-control[readonly] {
        background-color: #0d0d0d;
        opacity: 1;
    }
    .form-control {
        color: #ced4da;
        background-color: #111;
        font-size: initial;
    }
    /*FORUM*/
    .forum-breadcrumb {
        background-color: #0d0d0d;
    }


    /*SCROLL*/

    ::-webkit-scrollbar {
     width: 5px;
     height: 5px;
 }
 ::-webkit-scrollbar-button {
     width: 0px;
     height: 0px;
 }
 ::-webkit-scrollbar-thumb {
     background: #e1e1e1;
     border: 31px none;
     border-radius: 5px;
 }
 ::-webkit-scrollbar-thumb:hover {
     background: #a81d1d;
 }
 ::-webkit-scrollbar-thumb:active {
     background: red;
 }
 ::-webkit-scrollbar-track {
     background: #111;
     border: 1px solid #000;
     border-radius: 5px;
 }
 ::-webkit-scrollbar-track:hover {
     background: #0d0d0d;
 }
 ::-webkit-scrollbar-track:active {
     background: #c4c4c4;
 }
 ::-webkit-scrollbar-corner {
     background: #000;
 }


    /*@MEDIA*/

    @media only screen and (min-width: 1200px) {
    .container {
        max-width: 1170px;
    }
}
    

</style>