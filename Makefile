all: bibliography.html index.html

%.html: %.php
	php $< > $@

bibliography.php: bibliography.late
	sed -n '/%% W %%/,/%% \/W %%/p' ~/Projects/research.bib/fk.bib > /tmp/tmp.bib
	~/Software/bib2x-0.9.1/src/bib2x -f /tmp/tmp.bib -t bibliography.late > /tmp/bib.php
	# sed '1s/^.//' /tmp/bib.php > bibliography.php
	cat /tmp/bib.php > bibliography.php


