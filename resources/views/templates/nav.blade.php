<style>
    .logo{
        width: 55px;
        margin-left: 10px;
    }
    @media only screen and (min-width: 993px) {
    .logo {
            width: 65px;
        }
    }
</style>
<nav class="red darken-3">
	<div class="nav-wrapper">
		<a href="/" class="brand-logo"><img src="{{asset('img/logo.png')}}" class="logo"></a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="/aluno">Aluno</a></li>
			<li><a href="/supervisor">Supervisor</a></li>
		</ul>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="/aluno">Aluno</a></li>
			<li><a href="/supervisor">Supervisor</a></li>
		</ul>
	</div>
</nav>