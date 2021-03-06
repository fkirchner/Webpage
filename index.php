<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require 'header.php'; ?>
    <title>Florent Kirchner</title>
  </head>

  <body class="hyphenate">

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <p><a href="http://www.cea.fr">CEA</a> is a French public multidisciplinary
          research organization whose research fields range from nuclear energy
          to biosciences, from fundamental physics to information
          technology.
          </p><p>
          Within CEA the <a
            href="http://www-list.cea.fr/en/validation-en">LSL</a> laboratory
          leverages formal methods to ensure fundamental properties of software
          artifacts. Of particular interest are those pertaining to <abbr
            title="Innocuity with regards to classes of failures">safety</abbr>
          or <abbr title="Immunity to third-party threats">security</abbr>.
          </p><p>
          We <a
            href="http://shemesh.larc.nasa.gov/fm/fm-main-philosophy.html">share</a>
          the conviction that innovative, mathematically rigorous analyses
          are cost-effective means to verify and validate an increasing part of the
          growing diversity of software-intensive systems.
          </p><p>
          Our contribution to this evolving state-of-the-practice takes the form
          of industrial-strength tools: GATeL, <a
            href="frama-c.com">Frama-C</a> and <a
            href="http://unisim-vp.org">Unisim</a> bring composite V&amp;V techniques to
          various abstraction levels of executable formalisms.
          </p>
        </div>

        <div class="span4">
          <!-- Navigation -->
          <div class="red padded-max visible-desktop visible-tablet">
            <a href="#address" class="heading inset noit pull-right donthyphenate" data-toggle="modal">CONTACT</a>
          </div>
          <div class="padded-min hidden-desktop hidden-tablet">
            <div class="btn-group pull-right">
              <a href="#address" class="btn red inset noit donthyphenate" data-toggle="modal">CONTACT</a>
              <a href="bibliography.html" class="btn red inset noit donthyphenate">PUBLICATIONS</a>
            </div>
          </div>
          <!-- Publications -->
          <div>
            <h5>Offprints</h5>
            <article>
            <ul>
              <li class="type">Short paper</li>
              <li class="coauthors"><a href="http://shemesh.larc.nasa.gov/people/aeg/">Alwyn Goodloe</a>, <a href="http://shemesh.larc.nasa.gov/people/cam/">César A. Muñoz</a>, and <a href="https://www.polytechnique.org/profile/loic.correnson.1993">Loïc Correnson</a>.<br></li>
              <li class="title">
              <a href="http://dx.doi.org/10.1007/978-3-642-38088-4_31">
                Verification of Numerical Programs: From Real Numbers to Floating Point Numbers.
                </a>
              </li>
              <li class="howpub">NASA Formal Methods 2013: 441-446.</li>
              <li class="abstract">Verifying that rounding errors arising in a C implementation of a formally proven algorithm do not affect its correctness.</li>
            </ul>
            </article>
            <article>
            <ul>
              <li class="type">Conference paper</li>
              <li class="coauthors">
              Pascal Cuoq, <a href="http://kosmatov.perso.sfr.fr/nikolai/">Nikolai Kosmatov</a>, Virgile Prevosto, Julien Signoles, and <a href="http://yakobowski.org">Boris Yakobowski</a>.
              <br></li>
              <li class="title">
              <a href="http://dx.doi.org/10.1007/978-3-642-33826-7_16">
                Frama-C - A Software Analysis Perspective.
              </a>
              </li>
              <li class="howpub">SEFM 2012: 233-247.</li>
              <li class="abstract">
              Frama-C is a source code analysis platform that aims at conducting verification
              of industrial-size C programs. It provides its users with a collection of
              plug-ins that perform static analysis, deductive verification, and testing, for
              safety- and security-critical software.
              </li>
            </ul>
            </article>
            <article>
            <ul>
              <li class="type">Journal article</li>
              <li class="coauthors">
              <a href="http://www.irisa.fr/celtique/jensen/">Thomas P. Jensen</a> and
              <a href="http://www.irisa.fr/celtique/pichardie/">David Pichardie</a>.
              <br></li>
              <li class="title">
              <a href="http://www.lmcs-online.org/ojs/viewarticle.php?id=1012">
                Secure the Clones.
              </a>
              </li>
              <li class="howpub">Logical Methods in Computer Science 8(2) (2012).</li>
              <li class="abstract">
              Exchanging mutable data objects with untrusted code is a delicate
              matter because of the risk of creating a data space that is accessible
              by an attacker.</li>
            </ul>
            </article>
            <article>
            <ul>
              <li class="type">Conference paper</li>
              <li class="coauthors">
              <a href="http://www.irisa.fr/celtique/cachera/index_fr.html">David Cachera</a>, <a href="http://www.irisa.fr/celtique/jensen/">Thomas P. Jensen</a>, and <a href="http://www.irisa.fr/celtique/jobin/">Arnaud Jobin</a>.
              <br></li>
              <li class="title">
              <a href="http://dx.doi.org/10.1007/978-3-642-33125-1_7">
                Inference of Polynomial Invariants for Imperative Programs: A Farewell to Gr&#x6f;&#x0308;bner Bases.
              </a>
              </li>
              <li class="howpub">SAS 2012: 58-74.</li>
              <li class="abstract">
              We propose a static analysis for computing polynomial
              invariants for imperative programs. The analysis is derived from
              an abstract interpretation of a backwards semantics, and computes
              pre-conditions for equalities like g = 0 to hold at the end of
              execution.
              </li>
            </ul>
            </article>
            <h5 class="visible-desktop visible-tablet"><a class="" href="bibliography.html">All publications &raquo;</a></h5>
          </div>
        </div> <!--/span-->

        <!-- Projects -->
        <div class="span4">
          <div class="padded-max visible-desktop visible-tablet"></div>
          <div>
            <h5>The STANCE project</h5>
            <p>The objective of this <abbr class="initialism">FP7
              STREP</abbr> is to drive scientific and technological
            breakthroughs in the domain of software security.  Over three
            years, <abbr class="initialism">STANCE</abbr> will define,
            implement and validate a set of program analysis tools capable of
            verifying the security of complex software systems written in C, C++
            and Java.
            </p><p>
            <abbr class="initialism">STANCE</abbr> proposes to
            build on existing assets: formal methods, state-of-the-art static
            and dynamic program analysis tools, security evaluation
            expertise, and industry-specific knowledge will be used and
            significantly extended. The resulting program analysis toolbox
            and supporting methods will increase the trustworthiness and the
            cost-effectiveness of existing security-oriented processes. These
            innovations will durably alter the domain of software security
            assurance, with broad consequences on its legal, societal, and
            economic aspects.</p>
            <p>Project partners yield from France, Germany, Austria, Hungary, and Belgium. </p>
          </div>
        </div><!--/span-->

        <!-- Colophon -->
        <div class="span1">
          <div class="padded-max visible-desktop visible-tablet"></div>
          <!-- <p><a class="red inset" href="#colophon" data-toggle="modal"><strong>&raquo;</strong></a></p> -->
          <p><a class="red inset pull-right" href="#colophon" data-toggle="modal"><img src="assets/img/ftkicons_lozenge.png" style="margin-top:27px;"></a></p>
        </div><!--/span-->
      </div><!--/row-->
    </div><!--/fluid-container-->

    <?php require 'footer.php'; ?>

    <!-- Modals -->
    <div id="address" class="modal modal-medium hide fade" tabindex="-1" role="dialog" aria-labelledby="addressLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <strong>Florent Kirchner</strong><br>
        <table>
          <tr><td><abbr title="Email">M</abbr></td><td>: first.last@cea.fr</td></tr>
          <tr><td><abbr title="Phone">P</abbr></td><td>: +33 (0) 169 080 010</td></tr>
        </table>
      </div>
      <div class="borderless">
        <img class="borderless" src="assets/img/Florent_Kirchner_L.png">
      </div>
      <div class="modal-body">
        <a class="pull-right" href="assets/doc/Coming_to_Nano_INNOV.pdf">
          <img class="well well-small" src="assets/img/nano_icon.png" style="height:60px;">
        </a>
        <address>
          CEA Saclay Nano-INNOV<br>
          Point Courrier 174<br>
          91191 Gif-sur-Yvette<br>
          France
        </address>
      </div>
    </div>

    <div id="colophon" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="colophonLabel" aria-hidden="true">
      <div class="modal-body">
        <p>The layout of this page draws inspiration from the cover pages of <a
          href="http://www.henle.com">G. Henle</a>'s blue Urtext edition of sheet
        music.</p>
        <p>Body text is set 16/22px on a responsive measure with Apollo
        regular for body text and italics for hyperlinks. Akira Kobayashi's DIN Next is
        used for headings.</p>
        <p><a
          href="http://twitter.github.com/bootstrap/index.html">Bootstrap</a>
        pulls duty as a front-end framework and provides the static <abbr
          class="initialism">HTML</abbr>, <abbr class="initialism">CSS</abbr>,
        and Javascript assets. A <a
          href="https://github.com/fkirchner/bib2x-custom">patched</a> Bib2x handles
        the bibliography exports.</p>
        <p>The source code of this website is available from <a
          href="http://github.com/fkirchner/Webpage">Github</a>; feel free to
        fork it and submit patches.</p>
      </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/hyphenate.min.js"></script>

    <script type="text/javascript">
      $(".contact").before('<span class="braces inset">{</span> ');
    </script>
  </body>
</html>
