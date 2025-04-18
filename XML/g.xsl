<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="xml" indent="yes"/>

    <xsl:template match="/">
        <library>
            <xsl:apply-templates select="books/book"/>
        </library>
    </xsl:template>

    <xsl:template match="book">
        <bookInfo>
            <bookTitle>
                <xsl:value-of select="title"/>
            </bookTitle>
            <bookAuthor>
                <xsl:value-of select="author"/>
            </bookAuthor>
            <publicationYear>
                <xsl:value-of select="year"/>
            </publicationYear>
        </bookInfo>
    </xsl:template>
</xsl:stylesheet>
