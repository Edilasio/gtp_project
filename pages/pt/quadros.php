	
	<div class="row" style="margin-right: 0px">

        <div class="col-md-12">
                
            <div style="padding-top: 0px">
               <h4 style="margin-bottom:0; font-size: 16px" class="section-title ng-binding"> <strong> Quadro de Pessoal </strong> </h4>
            </div>

            <div class="row nomargin material">
                <div class="col-md-12" style="background:#FFF;border:1px solid #eee;padding-bottom:30px;border-top:0;">

					<div class="row material ng.scope" ng-repeat="item in quemEQuemList" ng-show="item.pessoas.length">
						
						<div class="col-md-12">
							<h5 class="margin-bottom-25 text-center titulo-quem-e-quem departamento uppertext ng-binding">Direcção Geral</h5>
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
												<br><span class="cargo ng-binding" style="color: #222;">Director Geral</span>
												<br><span class="departamento ng-binding" style="color: #222;">Consultor e Gestor de Projectos</span>
											</div>
										</div>
									</a>
								</div>				
							</div>
						</div>

					</div>

					<div class="row material ng.scope" ng-repeat="item in quemEQuemList" ng-show="item.pessoas.length">
						
						<div class="col-md-12">
							<h5 class="margin-bottom-25 text-center titulo-quem-e-quem departamento uppertext ng-binding">Direcção Administrativa e Financeira</h5>
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
												<br><span class="cargo ng-binding" style="color: #222;">Financeiro</span>
												<br><span class="departamento ng-binding" style="color: #222;">F. Administrativo</span>
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
												<br><span class="cargo ng-binding" style="color: #222;">Tesouraria</span>
												<br><span class="departamento ng-binding" style="color: #222;">Tesoureiro</span>
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
												<br><span class="cargo ng-binding" style="color: #222;">Contabilidade</span>
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
												<br><span class="cargo ng-binding" style="color: #222;">Contabilidade</span>
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
												<br><span class="departamento ng-binding" style="color: #222;">Gestor de Recursos Humanos</span>
											</div>
										</div>
									</a>
								</div>				
							</div>
						</div>

					</div>

					<div class="row material ng.scope" ng-repeat="item in quemEQuemList" ng-show="item.pessoas.length">
						
						<div class="col-md-12">
							<h5 class="margin-bottom-25 text-center titulo-quem-e-quem departamento uppertext ng-binding">Direcção Técnica e Produção</h5>
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
												<br><span class="cargo ng-binding" style="color: #222;">Serviços Técnicos</span>
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
												<br><span class="cargo ng-binding" style="color: #222;">Desenvolvimento e Inovação</span>
												<br><span class="departamento ng-binding" style="color: #222;">Enginheiro de Infra-estrutura de Redes</span>
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
												<br><span class="cargo ng-binding" style="color: #222;">Desenvolvimento e Inovação</span>
												<br><span class="departamento ng-binding" style="color: #222;">Técnico de Base de Dados</span>
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
												<br><span class="cargo ng-binding" style="color: #222;">Desenvolvimento e Inovação</span>
												<br><span class="departamento ng-binding" style="color: #222;">Enginheiro de Software</span>
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
												<br><span class="cargo ng-binding" style="color: #222;">Orçamentos</span>
												<br><span class="departamento ng-binding" style="color: #222;">Orçamentista</span>
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
												<br><span class="cargo ng-binding" style="color: #222;">Infografismo e Designer</span>
												<br><span class="departamento ng-binding" style="color: #222;">Marketing e Publicidade</span>
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
												<br><span class="cargo ng-binding" style="color: #222;">Infografismo e Designer</span>
												<br><span class="departamento ng-binding" style="color: #222;">Marketing e Publicidade</span>
											</div>
										</div>
									</a>
								</div>				
							</div>
						</div>

					</div>

					<div class="row material ng.scope" ng-repeat="item in quemEQuemList" ng-show="item.pessoas.length">
						
						<div class="col-md-12">
							<h5 class="margin-bottom-25 text-center titulo-quem-e-quem departamento uppertext ng-binding">Direcção Comercial e Abastecimento de Material</h5>
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
												<br><span class="cargo ng-binding" style="color: #222;">Contratos, Compras e Aprivisionamento</span>
												<br><span class="departamento ng-binding" style="color: #222;">Logístico</span>
											</div>
										</div>
									</a>
								</div>				
							</div>
						</div>

					</div>
			</div>
         </div>              
                  
        </div>              

    </div>

	