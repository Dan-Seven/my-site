<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Verificar se o usuário está em um dispositivo móvel
$isMobile = strpos($userAgent, 'Mobile') !== false;

if ($isMobile) {
    header('Location: mobile.html');
    exit();
} else {
    header('Location: index.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../images/logo2 dhscode.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito&family=Lilita+One&family=Montserrat:wght@800&family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/media.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.5/mobile-detect.min.js"></script>

    <script defer type="module" src="../js/inde.js"></script>
    <title>Dhscode.com.br</title>
</head>
<body>
    <header>
    <div class="center">
         <div class="logo"><img src="../images/Dhscode.png" alt="Logo dhscode"></div>
         <ul class="navbar">
            <li>Home</li>
            <li id="Sobre-no">Sobre nós</li>
            <li>Serviços</li>
            <li>Perguntas</li>
            <li>Contato</li>
           <button class="contato">Entre em contato</button>
         </ul>
    </div>
    </header>
<!--fim do cabeçalho -->

<!-- inicio das secoes -->
    <section class="section01">
        <div class="center">
           <div class="callback">
            <h1>Sua Jornada <span class="online">Online</span> Comeca com uma <span> Landing Page</span> Perfeita</h1>

            <p>Sites interativos são a nossa marca registrada. Com a <span>Dhscode</span> o seu site tem presença e inovação . Descubra o potencial do seu negócio online</p>

            <div class="contate">
           <a href="#contato"><button class="contato">Entre em contato</button></a>
           <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href="https://api.whatsapp.com/send?phone=+5516981453458&text=Ola gostaria de solicitar um orcamento." target="_blank"><i class="bi bi-whatsapp"></i></a>
        </div>
           </div>
          
           <div class="fluter">
            <img src="../images/logo dhscode.png" alt="Logo dhscode">
           </div>
        </div>
    </section>
    <!-- fim da secao01 -->
<div class="code">
    <div class="center">
    <img src="../images/Dhscode.png" alt="">
    <a href="#contato"><button class="contato">Entre em contato</button></a>
</div>
</div>
    <!-- inicio da secao02 -->
    <section class="section02">
        <div class="center">
        <div id="sobre" class="sobre">
            <h1>O que <span>fazemos ?</span></h1>
            <ul class="list">
                <li class="cima">
                    <img src="../images/site.png" alt="">
                   <p>Criamos landing pages animadas e interativas</p>
                </li>
                <li class="baixo">
                    <img src="../images/IA.png" alt="">
                    <p>Criamos seu SEO usando inteligencias artificiais altamente treinadas</p>
                </li>
                <li class="cima">
                    <img src="../images/manutenção.png" alt="">
                    <p>Com manutenções e otimizações de até 6 meses como garantia</p></li>
                <li class="baixo">
                    <img src="../images/design.png" alt="">
                    <p>Criamos designs totalmente atrativos conquistando a atenção dos clientes</p>
                </li>
            </ul>
        </div>
      
        <div class="conteudo">
            <h1>FUNCIONALIDADES DOS SITES</h1>
            <ul>
                <li>
                    <img src="../images/responsive.png" alt="">
                    <h1>Sites responsivos</h1>
                    <p>Seu site deve ser tão atraente em dispositivos móveis quanto em desktops. Todos os nossos sites são responsivos, garantindo que ninguém perca a oportunidade de se conectar com você.</p>
                </li>
               
                <li>
                    <img src="../images/SEO icon.png" alt="">
                    <h1>Site Otimizado para o Google</h1>
                    <p> A visibilidade é fundamental. Nossos sites são otimizados para mecanismos de busca (SEO), ajudando você a se destacar nos resultados de pesquisa e alcançar mais pessoas.</p>
                </li>
               
                <li>
                    <img src="../images/tec.icon.png" alt="">
                    <h1>Tecnologias de Ponta</h1>
                    <p>Trabalhamos com duas tecnologias para montar sites: o WordPress, que é a plataforma usada por mais de 30% dos sites do mundo, e uma tecnologia israelense que é a plataforma usada por mais de 39 milhões de sites no mundo.</p>
                </li>
               
                <li>
                    <img src="../images/design.icon.png" alt="">
                    <h1>Personalização Completa</h1>
                    <p>Cada site que criamos é único, projetado sob medida para atender às suas necessidades e refletir a identidade da sua marca. Não usamos modelos genéricos; tudo é feito do zero.</p>
                </li>
               
                <li>
                    <img src="../images/suporte.icon.png" alt="">
                    <h1>Suporte contínuo</h1>
                    <p>Não entregamos apenas um site e partimos. Fornecemos suporte contínuo e atualizações para garantir que seu site permaneça atualizado e funcional.</p>
                </li>
               
                <li>
                    <img src="../images/atrative.icon.png" alt="">
                    <h1>Sites atrativos</h1>
                    <p>A primeira impressão conta, e nossos sites são visualmente deslumbrantes. Utilizamos elementos de design modernos, cores atraentes e tipografia elegante para garantir que seu site seja memorável.</p>
                </li>
               
               
            </ul>
        </div>
    <div class="logo"><img src="../images/Dhscode.png" alt=""></div>
    </div><!-- Center -->

    </section>

    <!-- servicos -->
    <section id="servicos" class="Serviços">
        <div class="center">
            <h1>Designes Ilustrativos</h1>

            <h2>Da palma da sua mão até a tela da sua tv</h2>
            <div class="carrosel">
                <i class="bi bi-caret-left-fill"></i>
            <ul class="works">
                <li>
                  <img src="../landing/advocacia.png" draggable="false" alt="">
                </li>
                <li>
                    <img src="../landing/barbearia.jpg" draggable="false" alt="">
                  </li>
                  <li>
                    <img src="../landing/designer.png" draggable="false" alt="">
                  </li>
                  <li>
                    <img src="../landing/oficina.png" draggable="false" alt="">
                  </li>
                  <li>
                    <img src="../landing/nutricionista.png" draggable="false" alt="">
                  </li>
                  <li>
                    <img src="../landing/advocacia2.png" draggable="false" alt="">
                  </li>
            </ul>
            <i class="bi bi-caret-right-fill"></i>
            <div class="bullets">
                <span class="active"></span>
                <span></span> 
                <span></span>
                <span></span>
            </div>
        </div><!--carrosel-->
        </div>
    </section>
    <section id="perguntas" class="perguntas">
        <div class="center">
            <h1>Perguntas <span>frequentes</span></h1>
    <div class="separar">
            <ul class="quiz">
                <li><h2><i class="bi bi-question-circle"></i>Quais tipos de sites você cria (ex: sites corporativos, lojas online, blogs, etc.)? <i class="bi bi-caret-right-fill"></i></h2>
                    <p class="resposta">A Dhscode foca na criação de landing pages. Com o objetivo principal de incentivar os visitantes a realizar uma ação específica, como preencher um formulário, fazer uma compra, assinar uma newsletter ou clicar em um botão.</p>
                </li>
                <li>
                    <h2><i class="bi bi-question-circle"></i>Vocês oferecem serviços de manutenção e atualização de sites? <i class="bi bi-caret-right-fill"></i></h2>
                    <p class="resposta">Sim, oferecemos serviços abrangentes de manutenção e atualização de sites, incluindo um período de suporte direto de 6 meses após o lançamento do projeto. Estamos comprometidos em garantir que seu site esteja sempre atualizado e funcionando perfeitamente.</p>
                </li>
                
                <li>
                    <h2><i class="bi bi-question-circle"></i>Como funciona o processo de design? Vocês criam o design personalizado? <i class="bi bi-caret-right-fill"></i></h2>
                    <p class="resposta">Na Dhscode, nosso processo de design é altamente personalizado. Contamos com uma equipe talentosa dedicada a criar designs exclusivos e sob medida para cada cliente. Nossos designs são desenvolvidos com base nas suas necessidades e objetivos específicos, garantindo que seu site seja verdadeiramente único e represente a essência da sua marca.</p>
                </li>
                
                <li>
                    <h2><i class="bi bi-question-circle"></i>O site que vocês desenvolvem é responsivo, ou seja, se adapta a dispositivos móveis? <i class="bi bi-caret-right-fill"></i></h2>
                    <p class="resposta">Sim, todos os sites desenvolvidos pela Dhscode são entregues com design responsivo. Isso significa que seu site se adaptará perfeitamente a qualquer tipo de tela, proporcionando uma experiência de usuário consistente e amigável, independentemente do dispositivo utilizado.</p>
                </li>
                
                <li>
                    <h2><i class="bi bi-question-circle"></i>Vocês oferecem serviços de otimização para mecanismos de busca (SEO)? <i class="bi bi-caret-right-fill"></i></h2>
                    <p class="resposta">Sim, na Dhscode, nossa equipe utiliza o auxílio de inteligência artificial altamente treinada para desenvolver estratégias de SEO eficazes. Estamos comprometidos em otimizar seu site para garantir uma visibilidade superior nos mecanismos de busca, aumentar o tráfego orgânico e impulsionar o desempenho online da sua marca.</p>
                </li>
            </ul>

                <ul class="quiz">
                <li>
                    <h2><i class="bi bi-question-circle"></i>Quais tecnologias e plataformas vocês utilizam para o desenvolvimento de sites? <i class="bi bi-caret-right-fill"></i></h2>
                    <p class="resposta">Na Dhscode, utilizamos um conjunto de tecnologias modernas para desenvolver sites de alta qualidade. Isso inclui HTML, CSS, JavaScript e Node.js. Essas tecnologias nos permitem criar sites interativos, responsivos e altamente funcionais, atendendo às necessidades específicas de nossos clientes e garantindo uma experiência excepcional para os usuários.</p>
                </li>
                
                <li>
                    <h2><i class="bi bi-question-circle"></i>Quais são os prazos típicos de entrega de um projeto de site? <i class="bi bi-caret-right-fill"></i></h2>
                    <p class="resposta">Na Dhscode, estamos comprometidos com prazos ágeis. Geralmente, entregamos projetos de site em até 4 dias após a confirmação do acordo. Nosso objetivo é proporcionar uma entrega rápida e eficiente, para que você possa aproveitar seu novo site o mais rápido possível.</p>
                </li>
                
                <li>
                    <h2><i class="bi bi-question-circle"></i>Quais são os custos envolvidos no desenvolvimento de um site? <i class="bi bi-caret-right-fill"></i></h2>
                    <p class="resposta">No desenvolvimento de um site, os custos geralmente incluem o registro de domínio, que tem um valor anual variando de R$50 a R$200, e a hospedagem, com um custo mensal que varia de R$30 a R$100. Na Dhscode, trabalhamos com nossos clientes para encontrar soluções que se adequem às suas necessidades e orçamento, garantindo transparência e opções acessíveis para o desenvolvimento de sites.</p>
                </li>
                <li>
                    <h2><i class="bi bi-question-circle"></i>Como funciona o suporte e o atendimento ao cliente após o lançamento do site? <i class="bi bi-caret-right-fill"></i></h2>
                    <p class="resposta">Na Dhscode, estamos comprometidos em fornecer um suporte excepcional aos nossos clientes após o lançamento do site. Oferecemos um atendimento direto via WhatsApp, garantindo que você tenha uma maneira rápida e conveniente de entrar em contato conosco para quaisquer dúvidas, atualizações ou assistência técnica. Nossa equipe está à disposição para ajudar a manter seu site funcionando perfeitamente e atender às suas
                
                    <li>
                        <h2><i class="bi bi-question-circle"></i>Quais são as opções de pagamento disponíveis para os projetos? <i class="bi bi-caret-right-fill"></i></h2>
                        <p class="resposta">Na Dhscode, oferecemos opções de pagamento flexíveis para atender às suas necessidades. Você pode pagar por nossos serviços através de Pix ou cartão de crédito. Estamos comprometidos em proporcionar conveniência e flexibilidade nas opções de pagamento, para que você possa escolher a que melhor se adapte à sua preferência e conveniência.</p>
                    </li>  
            </ul>
        </div>
        <a href="#contato"><button class="orcamento">Peça seu orçamento</button></a>

        </div>
    </section>

    <section class="contrato">
        <div class="cover"></div>
        <div class="center">
        <h1 class="scs">CONTRATE UM SITE <span>PROFISSIONAL</span></h1>
        <div class="demanda">
            <ul class="expresso">
                <h1>CRIAÇÃO DE LANDING PAGES <span>PERSONALIZADAS</span></h1>
                <span class="preco">A partir de <span class="valor">R$300</span></span>
                <span class="incluso">HOSPEDAGEM E SUPORTE INCLUSOS</span>
                <ul class="nha">
                    <li><i class="bi bi-check"></i>Criação de landing pages altamente eficazes</li>
                    <li><i class="bi bi-check"></i>Design responsivo otimizado para conversões (desktop, tablet, celular)</li>
                    <li><i class="bi bi-check"></i>Personalização completa da landing page com suas cores, imagens e texto</li>
                    <li><i class="bi bi-check"></i>Integração de formulários de contato e call-to-action</li>
                    <li><i class="bi bi-check"></i>Otimização para mecanismos de busca (SEO)</li>
                    <li><i class="bi bi-check"></i>Rápido tempo de carregamento para maximizar a retenção de visitantes</li>
                    <li><i class="bi bi-check"></i>Análise de desempenho e relatórios de conversão</li>
                </ul>
            <a href="#contato"><button class="orcamento">Solicite seu Orçamento</button></a>
            </ul>
            
          
        </div>
    </div>
    </section>
 
    <section class="form">
        <div class="center">
            <h1>Entre em contato conosco</h1>
            <div class="formulario">
                <form id="contato">
                    <span>Nome</span>
                    <input type="text" id="nome"  name="nome" required placeholder="Insira seu nome">
                    <span>Email</span>
                    <input type="text" id="email" name="email" required placeholder="Insira seu E-mail">
                    <span>Telefone</span>
                    <input type="text" id="telefone" name="telefone" required placeholder="Insira seu telefone">
                    <input id="enviar" type="submit" value="enviar">
                </form>
            </div>
       

        <div class="logo"><img src="../images/logo2 dhscode.png" alt=""></div>
        </div>
    </section>

    <footer>
        <p>© 2023 TODOS OS DIREITOS RESERVADOS DHSCODE</p>
    </footer>
</body>
</html>