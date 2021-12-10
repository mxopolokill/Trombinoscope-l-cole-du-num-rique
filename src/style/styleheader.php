<style>
.main-menubox {
    display: none;
}

.main-menu:hover .main-menubox{
    display: block;
}


.dropdown-submenu{
    position: relative;
}
.dropdown-submenu a::after{
    transform: rotate(-90deg);
    position: absolute;
    right: 3px;
    top: 40%;
}
.dropdown-submenu:hover .dropdown-menu, .dropdown-submenu:focus .dropdown-menu{
    display: flex;
    flex-direction: column;
    position: absolute !important;
    margin-top: -30px;
    left: 100%;
}
@media (max-width: 992px) {
    .dropdown-menu{
        width: 50%;
    }
    .dropdown-menu .dropdown-submenu{
        width: auto;
    }

    .dropdown-menu{ left: -131%;}
}

.dropdown-submenu a::after {
    right: 16px;
    top: 42%;
}

.dropdown-item {
    padding: 8px 18px;
}

    .dropdown-item{white-space: normal}

    .navbar-expand-lg .navbar-nav .dropdown-menu {
    font-size: 14px;
}

.dropdown-item:focus, .dropdown-item:hover {
    color: #16181b;
    text-decoration: none;
    background-color: #113B5B;
}

  li.nav-item{  padding: 10px 20px;}

.EDN{
        width: 15%;
        max-width: 53%;
}
.bg-light {
    background-color: #113b5b!important;
}

.navbar-light .navbar-nav .nav-link {
    color: rgb(255 255 255);
}

.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
    color: rgb(255 255 255);
}

.far fa-comments{
    width: 100%;
    margin: 0 0 0 0;
    padding: 10px 10px 10px 10px;    
    height: 20px!important;
    padding-top: 22px!important;

}
.Background41{
    width: 100%!important;
    height: 937px!important;
}







.li.nav-item {
    padding: 9px 51px!important;
}

.dropdown-toggle::after {
    display: inline-block!important;
    width: 0;
    height: 0;
    margin-left: 14.255em!important;
    vertical-align: .255em!important;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: .25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #113b5b!important;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

.fa-comments:before {
    content: "\f086";
    color: white;
    position: relative;
    
}

.GrosBlock{
    display: flex;
    
}



label,
footer {
    font-family: sans-serif;
}

label {
    font-size: 1rem;
    padding-right: 10px;
}

select {
    font-size: .9rem;
    padding: 2px 5px;
}

footer {
    font-size: .8rem;
    position: absolute;
    bottom: 30px;
    left: 30px;
}

.output {
    position: relative;
}

.SearchPromo{
    display: flex;
    flex-direction: column;
    margin-top: 120px;
    margin-left: 400px;
    width: 200px;
}


label {
    font: 1rem 'Fira Sans', sans-serif;
}

input {
    margin: .4rem;
}

.filter0{
    display: flex;
    flex-direction: row;
}


.competence{
    margin-top: 120px;
    margin-left: 15px;
}


.Blockinput{
    margin-top: 140px;
}

@media (max-width: 867px) {
    .dropdown-menu{
        width: 50%;
    }
    .dropdown-menu .dropdown-submenu{
        width: auto;
    }

    .dropdown-menu{ left: -131%;}

    label,
footer {
    font-family: sans-serif;
}

label {
    font-size: 1rem;
    padding-right: 10px;
}

select {
    font-size: .9rem;
    padding: 2px 5px;
}

footer {
    font-size: .8rem;
    position: absolute;
    bottom: 30px;
    left: 30px;
}

.output {
    background: center/cover no-repeat url('/media/cc0-images/hamster.jpg');
    position: relative;
}

.SearchPromo{
    display: flex;
    flex-direction: column;
    margin-top: 155px;
    margin-left: 12px;
    width: 200px;
}


label {
    font: 1rem 'Fira Sans', sans-serif;
}

input {
    margin: .4rem;
}

.filter0{
    display: flex;
    flex-direction: column;
}


.competence{
    margin-top: 120px;

    
}


.Blockinput{
    margin-top: 100px;
}
}

@media (max-width: 1366px) {
    .dropdown-menu{
        width: 50%;
    }
    .dropdown-menu .dropdown-submenu{
        width: auto;
    }

    .dropdown-menu{ left: -131%;}

    label,
footer {
    font-family: sans-serif;
}

label {
    font-size: 1rem;
    padding-right: 10px;
}

select {
    font-size: .9rem;
    padding: 2px 5px;
}

footer {
    font-size: .8rem;
    position: absolute;
    bottom: 30px;
    left: 30px;
}

.output {
    background: center/cover no-repeat url('/media/cc0-images/hamster.jpg');
    position: relative;
}

.SearchPromo{
    display: flex;
    flex-direction: column;
    margin-top: 155px;
    margin-left: 12px;
    width: 200px;
}


label {
    font: 1rem 'Fira Sans', sans-serif;
}

input {
    margin: .4rem;
}

.filter0{
    display: flex;
    flex-direction: row;
}


.competence{
    margin-top: 150px;

    
}


.Blockinput{
    margin-top: 175px;

}
}

@media (max-width: 640px) {
    .dropdown-menu{
        width: 50%;
    }
    .dropdown-menu .dropdown-submenu{
        width: auto;
    }

    .dropdown-menu{ left: -131%;}

    label,
footer {
    font-family: sans-serif;
}

label {
    font-size: 1rem;
    padding-right: 10px;
}

select {
    font-size: .9rem;
    padding: 2px 5px;
}

footer {
    font-size: .8rem;
    position: absolute;
    bottom: 30px;
    left: 30px;
}

.output {
    background: center/cover no-repeat url('/media/cc0-images/hamster.jpg');
    position: relative;
}

.SearchPromo{
    display: flex;
    flex-direction: column;
    margin-top: 155px;
    margin-left: 12px;
    width: 200px;
}


label {
    font: 1rem 'Fira Sans', sans-serif;
}

input {
    margin: .4rem;
}

.filter0{
    display: flex;
    flex-direction: column;
}


.competence{
    margin-top: 120px;

    
}


.Blockinput{
    margin-top: 100px;
}
}

@media (max-width: 761px) {
    .dropdown-menu{
        width: 50%;
    }
    .dropdown-menu .dropdown-submenu{
        width: auto;
    }

    .dropdown-menu{ left: -131%;}

    label,
footer {
    font-family: sans-serif;
}

label {
    font-size: 1rem;
    padding-right: 10px;
}

select {
    font-size: .9rem;
    padding: 2px 5px;
}

footer {
    font-size: .8rem;
    position: absolute;
    bottom: 30px;
    left: 30px;
}

.output {
    background: center/cover no-repeat url('/media/cc0-images/hamster.jpg');
    position: relative;
}

.SearchPromo{
    display: flex;
    flex-direction: column;
    margin-top: 155px;
    margin-left: 90px;
    width: 200px;
}


label {
    font: 1rem 'Fira Sans', sans-serif;
}

input {
    margin: .4rem;
}

.filter0{
    display: flex;
    flex-direction: column;
}


.competence{
    margin-top: 120px;
    margin-left: 90px;
    
}


.Blockinput{
    margin-top: 100px;
    margin-left: 90px;
}
}










</style>