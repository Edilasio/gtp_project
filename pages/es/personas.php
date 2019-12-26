	
	<div>
		<h2 style="background-color: #CCD3D6; border-radius: 4px;">Personal</h2>
	</div>

	<div class="row material ng.scope" ng-repeat="item in quemEQuemList" ng-show="item.pessoas.length">
		
		<div class="col-md-12">
			<h5 class="margin-bottom-25 text-center titulo-quem-e-quem departamento uppertext ng-binding">Dirección General</h5>
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
								<br><span class="cargo ng-binding" style="color: #222;">Director General</span>
								<br><span class="departamento ng-binding" style="color: #222;">Consultor y Gerente de Proyectos</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

	</div>

	<div class="row material ng.scope" ng-repeat="item in quemEQuemList" ng-show="item.pessoas.length">
		
		<div class="col-md-12">
			<h5 class="margin-bottom-25 text-center titulo-quem-e-quem departamento uppertext ng-binding">Dirección Administrativa y Financiera</h5>
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
								<br><span class="cargo ng-binding" style="color: #222;">Financiero</span>
								<br><span class="departamento ng-binding" style="color: #222;">Finanzas Administrativas</span>
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
								<br><span class="cargo ng-binding" style="color: #222;">Tesorería</span>
								<br><span class="departamento ng-binding" style="color: #222;">Tesorero</span>
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
								<br><span class="cargo ng-binding" style="color: #222;">Contabilidad</span>
								<br><span class="departamento ng-binding" style="color: #222;">Contabilista</span>
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
								<br><span class="cargo ng-binding" style="color: #222;">Contabilidad</span>
								<br><span class="departamento ng-binding" style="color: #222;">Contabilista</span>
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
								<br><span class="cargo ng-binding" style="color: #222;">Recursos Humanos</span>
								<br><span class="departamento ng-binding" style="color: #222;">Gerente de Recursos Humanos</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

	</div>

	<div class="row material ng.scope" ng-repeat="item in quemEQuemList" ng-show="item.pessoas.length">
		
		<div class="col-md-12">
			<h5 class="margin-bottom-25 text-center titulo-quem-e-quem departamento uppertext ng-binding">Dirección Técnica y de Producción</h5>
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
								<br><span class="cargo ng-binding" style="color: #222;">Servicios Técnicos</span>
								<br><span class="departamento ng-binding" style="color: #222;">Arquitecto</span>
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
								<br><span class="cargo ng-binding" style="color: #222;">Desarrollo e Innovación</span>
								<br><span class="departamento ng-binding" style="color: #222;">Ingeniero de Infraestructura de Red</span>
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
								<br><span class="cargo ng-binding" style="color: #222;">Desarrollo e Innovación</span>
								<br><span class="departamento ng-binding" style="color: #222;">Técnico de Base de Datos</span>
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
								<br><span class="cargo ng-binding" style="color: #222;">Desarrollo e Innovación</span>
								<br><span class="departamento ng-binding" style="color: #222;">Ingeniero de Software</span>
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
								<br><span class="cargo ng-binding" style="color: #222;">Presupuestos</span>
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
								<br><span class="cargo ng-binding" style="color: #222;">Infografía y Diseñador</span>
								<br><span class="departamento ng-binding" style="color: #222;">Marketing y publicidad</span>
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
							<br><h5 class="titulo-quem-e-quem ng-binding" style="color: #222;">Manuel Callas</h5>
							<b>__________________</b>
							<div class="info-quem-e-quem">
								<br><span class="cargo ng-binding" style="color: #222;">Infografía y Diseñador</span>
								<br><span class="departamento ng-binding" style="color: #222;">Marketing y publicidad</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

	</div>

	<div class="row material ng.scope" ng-repeat="item in quemEQuemList" ng-show="item.pessoas.length">
		
		<div class="col-md-12">
			<h5 class="margin-bottom-25 text-center titulo-quem-e-quem departamento uppertext ng-binding">Dirección Comercial y Suministro de Materiales</h5>
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
								<br><span class="cargo ng-binding" style="color: #222;">Contratos, Compras y Adquisiciones</span>
								<br><span class="departamento ng-binding" style="color: #222;">Logístico</span>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>

	</div>

	