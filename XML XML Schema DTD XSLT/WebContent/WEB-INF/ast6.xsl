<?xml version='1.0'?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  
  <body>
    <table border="2" bgcolor="yellow">
      <tr>
        <th>Agency Name</th>
        <th>Email ID</th>
        <th>Phone</th>
       </tr>
      <xsl:for-each select="real-estate/agencies">
      <tr>
        <td><xsl:value-of select="name"/></td>
        <td><xsl:value-of select="email"/></td>
      	<td><xsl:value-of select="phone"/></td>
      
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>