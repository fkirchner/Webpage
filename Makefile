bib:
	sed -n '/%% W %%/,/%% \/W %%/p' ~/Projects/research.bib/fk.bib > /tmp/tmp.bib
	~/Software/bib2x-0.9.1/src/bib2x -f /tmp/tmp.bib -t bibliography.late > /tmp/bib.html
	# sed '1s/^.//' /tmp/bib.html > bibliography.html
	cat /tmp/bib.html > bibliography.html



