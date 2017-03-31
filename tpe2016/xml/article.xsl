<?xml version="1.0" encoding="UTF8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="xml" encoding="ISO-8859-1"/>


<xsl:template match="/">
	<xsl:apply-templates/>
</xsl:template>

<xsl:template match="article">
	<article>
		<h1><xsl:value-of select="./@title"/></h1>
		<aside><xsl:value-of select="./@date"/></aside>
		<xsl:apply-templates/>
	</article>
</xsl:template>

<xsl:template match="p">
	<p><xsl:value-of select="."/></p>
</xsl:template>

<xsl:template match="diapo">
	
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="https://scontent-yyz1-1.xx.fbcdn.net/hphotos-xtp1/v/t1.0-9/11224427_1026650077386998_7428281511824507533_n.jpg?oh=3ee807dea54116517c00e7e42f9052fd&oe=56D25DB7" alt="...">
            </div>
            <div class="item">
              <img src="https://scontent-yyz1-1.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/12106880_1026650114053661_3825359060944152747_n.jpg?oh=e38d887e22c50b1823c36aa77f39acf0&oe=56CCB7D2" alt="...">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</xsl:template>






</xsl:stylesheet>