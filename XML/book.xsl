<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


    <xsl:output method="text"/>

    <xsl:template match="/">
        <xsl:text>Book List:\n\n</xsl:text>
        <xsl:apply-templates select="bookstore/book"/>
    </xsl:template>

    <xsl:template match="book">
        <xsl:text>Title: </xsl:text><xsl:value-of select="title"/><xsl:text>\n</xsl:text>
        <xsl:text>Author: </xsl:text><xsl:value-of select="author"/><xsl:text>\n</xsl:text>
        <xsl:text>Year: </xsl:text><xsl:value-of select="year"/><xsl:text>\n</xsl:text>
        <xsl:text>Price: $</xsl:text><xsl:value-of select="price"/><xsl:text>\n\n</xsl:text>
    </xsl:template>
</xsl:stylesheet>
