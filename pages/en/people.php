	
	<div>
		<h2 style="background-color: #CCD3D6; border-radius: 4px;">Staff</h2>
	</div>

	<div class="row material ng.scope" ng-repeat="item in quemEQuemList" ng-show="item.pessoas.length">
		
		<div class="col-md-12">
			<h5 class="margin-bottom-25 text-center titulo-quem-e-quem departamento uppertext ng-binding">Directorate General</h5>
		</div>

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first">
			<div class="card">
				<div class="row">
					<a ui-sref="sobre-o-minfin.quem-e-quem.cdQuemEQuem({cdQuemEQuem : pessoa.cdQuemEQuem, regimeCarreira : (pessoa.regimeCarreira.cargo | slugify), noQuemEQuem : (pessoa.noQuemEQuem | slugify) })" href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/nMateus.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Nabeiro Mateus</h5>
							<b>__________________</b>
							<div class="info-quem-e-quem">								
								<br><span class="cargo ng-binding" style="color: #222;">General Manager</span>
								<br><span class="departamento ng-binding" style="color: #222;">Consultant And Project Manager</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

	</div>

	<div class="row material ng.scope" ng-repeat="item in quemEQuemList" ng-show="item.pessoas.length">
		
		<div class="col-md-12">
			<h5 class="margin-bottom-25 text-center titulo-quem-e-quem departamento uppertext ng-binding">Administrative And Financial Directorate</h5>
		</div>

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 margin-bottom-15">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/pNunes.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Gonzaga Nunes</h5>
							<b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Financial</span>
								<br><span class="departamento ng-binding" style="color: #222;">Administrative Finance</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 margin-bottom-15">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/pAgostinho.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Paulo Agostinho</h5>
							<b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Treasury</span>
								<br><span class="departamento ng-binding" style="color: #222;">Treasurer</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 margin-bottom-15">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/fundo.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Domingos Adriano</h5><b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Accounting</span>
								<br><span class="departamento ng-binding" style="color: #222;">Accountant</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 margin-bottom-15">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/sManuel.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Santos Ngolambole</h5><b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Accounting</span>
								<br><span class="departamento ng-binding" style="color: #222;">Accountant</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 margin-bottom-15">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/dFernando.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Domingos Fernando</h5><b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Human Resources</span>
								<br><span class="departamento ng-binding" style="color: #222;">Human Resources Manager</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

	</div>

	<div class="row material ng.scope" ng-repeat="item in quemEQuemList" ng-show="item.pessoas.length">
		
		<div class="col-md-12">
			<h5 class="margin-bottom-25 text-center titulo-quem-e-quem departamento uppertext ng-binding">Technical and Production Directorate</h5>
		</div>		

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 margin-bottom-15">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/fundo.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Manuel André</h5>
							<b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Technical Services</span>
								<br><span class="departamento ng-binding" style="color: #222;">Architect</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>
		

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 margin-bottom-15">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/iNzage.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Inácio Nzage</h5>
							<b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Development And Innovation</span>
								<br><span class="departamento ng-binding" style="color: #222;">Network Infrastructure Engineer</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 margin-bottom-15">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/jSalvaterra.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Júdice Salvaterra</h5><b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Development And Innovation</span>
								<br><span class="departamento ng-binding" style="color: #222;">Database Technician</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 margin-bottom-15">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/eVieira.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Edilásio Vieira</h5>
							<b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Development And Innovation</span>
								<br><span class="departamento ng-binding" style="color: #222;">Software Engineer</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 margin-bottom-15">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/fundo.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Leónidas</h5>
							<b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Budgets</span>
								<br><span class="departamento ng-binding" style="color: #222;">Budgetist</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 margin-bottom-15">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/vBaltazar.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Victor Baltazar</h5>
							<b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Infographics And Designer</span>
								<br><span class="departamento ng-binding" style="color: #222;">Marketing And Advertising</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 margin-bottom-15">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/mSoares.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Manuel Soares</h5>
							<b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Infographics And Designer</span>
								<br><span class="departamento ng-binding" style="color: #222;">Marketing And Advertising</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

	</div>

	<div class="row material ng.scope" ng-repeat="item in quemEQuemList" ng-show="item.pessoas.length">
		
		<div class="col-md-12">
			<h5 class="margin-bottom-25 text-center titulo-quem-e-quem departamento uppertext ng-binding">Commercial Directorate and Material Supply</h5>
		</div>

		<div ng-repeat="pessoa in item.pessoas" ng-class="{'col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first':($parent.$first && $first),'col-md-6 margin-bottom-15':!($parent.$first && $first)}" class="ng-scope col-md-6 col-md-offset-4 margin-bottom-40 quem-equem-first">
			<div class="card">
				<div class="row">
					<a href="#">
						<div class="col-md-6 nopadding">
							<div class="card-image">
								<div class="imagem-quem-e-quem">
									<img src="image/rAguilar.jpg" height="205px">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Rui Aguilar</h5>
							<b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Contracts, Purchasing and Procurement</span>
								<br><span class="departamento ng-binding" style="color: #222;">Logistic</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

	</div>

	