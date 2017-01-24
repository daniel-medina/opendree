@extends('template')

@section('head')
    Tableau de bord
@endsection

@section('meta')

@endsection

@section('content')
    <div class="dashboard">
	@include('dashboard.menu')

	<div class="col-md-10 content">
	    <div class="title">Janvier 2017</div>
	    <div class="col-md-12">
		<div class="data col-md-3 amounts" data-attribute="1">
		    <div class="header">
			Autorisations de voirie
		    </div>
		    <div class="middle">173,560.45 €</div>
		    <div class="footer" type="button" data-toggle="collapse" data-target="#collapseVoirie" aria-expanded="false" aria-controls="collapseVoirie">
			<span class="glyphicon glyphicon-option-horizontal show-more"></span>
		    
			<div class="collapse" id="collapseVoirie">
			    <div class="previous">
				<div class="title">Mois année précédente</div>
				<div class="value">187,240.00 €</div>
			    </div>

			    <div class="previous">
				<div class="title">Cumul année</div>
				<div class="value">187,240.00 €</div>
			    </div>

			    <div class="previous">
				<div class="title">Cumul année précédente</div>
				<div class="value">187,240.00 €</div>
			    </div>
			</div>
		    </div>
		</div>
	    </div>

	    <div class="col-md-12">
		<div class="data col-md-3 services" data-attribute="1">
		    <div class="header">DPC</div>

		    <div class="middle small">
			<li><span class="glyphicon glyphicon-user"></span> 48 agents</li>
			<li><span class="glyphicon glyphicon-calendar"></span> 6 jours de congés</li>
			<li><span class="glyphicon glyphicon-time"></span> 140 heures sup'</li>
		    </div>
		</div>
	    </div>
	</div>
    </div>
@endsection
