<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="xml" indent="yes"/>
    <xsl:template match="/">
        <mergedStudents>
            <xsl:copy-of select="document('f1.xml')/students"/>
            <xsl:copy-of select="document('f2.xml')/students"/>
            <xsl:copy-of select="document('f3.xml')/students"/>
        </mergedStudents>
    </xsl:template>
</xsl:stylesheet>
