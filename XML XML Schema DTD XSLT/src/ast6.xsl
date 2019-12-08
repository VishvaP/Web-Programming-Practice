<?xml version='1.0' encoding='UTF-8'?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  
  <body>
  <!-- agency elements display-->
  <h1>Agency Details</h1>
    <table border="2" bgcolor="yellow">
      <tr>
        <th>Agency Name</th>
        <th>Email ID</th>
        <th>Phone</th>
       </tr>
      <xsl:for-each select="real-estate/agencies/agency">
      <tr>
        <td><xsl:value-of select="name"/></td>
        <td><xsl:value-of select="email"/></td>
      	<td><xsl:value-of select="phone"/></td>
      
      </tr>
      </xsl:for-each>
    </table>

  <!-- owner elements display-->
  <h1>Owner Details</h1>
    <table border="2" bgcolor="lightgreen">
      <tr>
        <th>Owner Name</th>
       </tr>
      <xsl:for-each select="real-estate/owners/owner">
      <tr>
        <td><xsl:value-of select="name"/></td>
      </tr>
      </xsl:for-each>
    </table>


 <!-- property elements display-->
  <h1>Property Details</h1>
    <table border="2" bgcolor="lightblue">
      <tr>
        <th>Property Name</th>
		<th>Description</th>
		<th>Number of Flats</th>
		<th>Features Highlights</th>
       </tr>
      <xsl:for-each select="real-estate/properties/property">
      <tr>
        <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="desc"/></td>
      <td><xsl:value-of select="noOfFlat"/></td>
	 <td><xsl:value-of select="features"/></td>
	 </tr>
      </xsl:for-each>
    </table>
	
	<!-- flat info -->
	<h1> Flat Details</h1>
	<table border="2" bgcolor="pink">
	<tr>
	<th>Flat Name</th>
	<th>Description</th>
	<th>Features</th>
	</tr>
	<xsl:for-each select="real-estate/flats/flat">
	<tr>
	<td><xsl:value-of select="name"/></td>
	<td><xsl:value-of select="desc"/></td>
	<td><xsl:value-of select="features"/></td>
	</tr>
	</xsl:for-each>
	</table>
	
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>