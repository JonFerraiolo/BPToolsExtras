<?php

/* Sometimes we want to disable the PHP. If so, uncomment these two lines.
*/
echo 'disabled';
exit(0);

// For debugging, set to false and emails won't be sent.
$send_emails=false;


/************************
 * Mail best practices requires unique IDs, so create an ID based on current time of day
************************/
date_default_timezone_set('America/Los_Angeles');
$random_hash = md5(date('r', time()));

$people_list='';


/************************
 * Set up mail headers
 * For the mass mailing, this is the part that would change.
************************/
$subject = "Announcing Karen Kang's BrandingPays(TM)";
$headers = "From: Karen Kang <KarenKang@BrandingPays.com>\r\n".
"MIME-Version: 1.0\r\n" .
"Content-Type: multipart/related; ".
"boundary=\"0__".$random_hash."\""."\r\n";


/************************
 * Plain text content for email body for mail readers that can't read HTML
************************/
$plaincontent='
Announcing Karen Kang\'s BrandingPays(TM)

Karen Kang Consulting is now BrandingPays LLC
I\'m excited about how my business has grown and developed over the past 16 years. None of this could have happened without the support of my wonderful clients and friends. To you, I extend my heartfelt thanks.

Don\'t worry, I\'m still Karen Kang, the Silicon Valley branding expert you\'ve always known. I\'m just changing my company name and augmenting my products and services. This change helps me to consolidate both my company and products under one brand. I hope you\'ll agree that BrandingPays(TM) better communicates what I do and the value I deliver in both corporate branding and corporate training on personal branding. To learn more, check out my new website at http://BrandingPays.com.

BrandingPays(TM) Tools for Life
I\'m also announcing Beta trials of new web tools for corporate licensing that complement my training seminars on personal branding. BrandingPays(TM) Tools for Life are interactive templates with embedded tips and examples that will empower any professional to develop a positive brand. The tools currently will be limited to corporate licensees, but I hope to offer the tools to business consumers by early next year.

Proven with Fortune 500 to Startups
The unique BrandingPays(TM) methodology (formerly JumpStart branding) has been proven with more than 150 organizations from the Fortune 500 to startups, including AT&T, Ariba, Genentech, HP, McKesson, UC Davis Health System, iCharts and VoyagePrive.com. I\'ve conducted BrandingPays(TM) seminars at top business schools from the London Business School and Stanford University to the Haas School (University of California at Berkeley) and the Leavey School (Santa Clara University).

Corporate or Personal Branding
Branding does pay. I\'d love to help you with your corporate branding or corporate training on personal branding. Contact me at KarenKang@BrandingPays.com or 650.328.1121.

Here\'s to the start of a great New Year,

Karen Kang
Founder & CEO
BrandingPays LLC
';


/************************
 * HTML content for email body
************************/
$htmlcontent='
<html><body>
<table id="htmlwrapper" width="100%" style="background-color: #E6E6E6; border: none;" cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<table id="bodybox" height="787px" width="553px" style="margin: 36px auto 36px auto; background-color: white; border: none;" cellspacing="0" cellpadding="0">
				<tr>
					<td style="padding: 0; border: none;">
						<table width="100%" style="padding: 0; border: none;" cellspacing="0" cellpadding="0">
							<tr>
								<td style="padding-left: 12px; padding-top: 8px; border: none;" height="72px">
									<img height="63px" width="266px" src="cid:2__'.$random_hash.'@brandingpays.com" />
								</td>
							</tr>
							<tr>
								<td style="vertical-align: top; font-family: Arial, sans-serif;">
									<div style="margin-top: 38px; margin-left: 26px;">
										<p style="font-size: 13pt; font-weight: bold;">Announcing Karen Kang&rsquo;s BrandingPays&trade;</p>
										<div style="font-size: 9.5pt; margin-right: 17px;">
											<p><span style="font-weight: bold; color: #0099CC;">Karen Kang Consulting is now BrandingPays LLC</span><br />
											I&rsquo;m excited about how my business has grown and developed over the past 16 years.  None of
											this could have happened without the support of my wonderful clients and friends.  To you, I
											extend my heartfelt thanks.
											</p>
											<p>
											Don&rsquo;t worry, I&rsquo;m still Karen Kang, the Silicon Valley branding expert you&rsquo;ve always known.  I&rsquo;m
											just changing my company name and augmenting my products and services.  This change helps
											me to consolidate both my company and products under one brand.  I hope you&rsquo;ll agree that
											BrandingPays&trade; better communicates what I do and the value I deliver in both corporate
											branding and corporate training on personal branding.  To learn more, check out my new
											website at <a href="http://www.BrandingPays.com" style="text-decoration: none; color: #CC0000;">http://BrandingPays.com</a>.
											</p>
											<p>
											<span style="font-weight: bold; color: #0099CC;">BrandingPays&trade; Tools for Life</span><br />
											I&rsquo;m also announcing Beta trials of new web tools for corporate licensing that complement my
											training seminars on personal branding.  BrandingPays&trade; Tools for Life are interactive templates
											with embedded tips and examples that will empower any professional to develop a positive brand.
											The tools currently will be limited to corporate licensees, but I hope to offer the tools to business
											consumers by early next year.
											</p>
											<p>
											<span style="font-weight: bold; color: #0099CC;">Proven with Fortune 500 to Startups</span><br />
											The unique BrandingPays&trade; methodology (formerly JumpStart branding) has been proven with
											more than 100 organizations from the Fortune 500 to startups, including AT&T, Ariba, Genentech,
											HP, McKesson, UC Davis Health System, iCharts and VoyagePrive.  I&rsquo;ve conducted
											BrandingPays&trade; seminars at top business schools from the London Business School and
											Stanford University to the Haas School (University of California at Berkeley) and the Leavey
											School (Santa Clara University).
											</p>
											<p>
											<span style="font-weight: bold; color: #0099CC;">Corporate or Personal Branding</span><br />
											Branding does pay. I&rsquo;d love to help you with your corporate branding or corporate training on
											personal branding.  Contact me at <a href="mailto:KarenKang@BrandingPays.com" style="text-decoration: none; color: #CC0000;">KarenKang@BrandingPays.com</a> or 650.328.1121.
											</p>
											<p>Here&rsquo;s to the start of a great New Year,</p>
											<p><img src="cid:1__'.$random_hash.'@brandingpays.com" width="81px" height="68px" /></p>
											<p>
											Karen Kang<br />
											Founder & CEO<br />
											BrandingPays LLC
											</p>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
';

$body = "";

$body .= "--0__".$random_hash."\r\n".
"Content-Type: multipart/alternative; boundary=\"1__".$random_hash."\""."\r\n\r\n".

"--1__".$random_hash."\r\n".
"Content-Type: text/plain; charset=\"utf-8\"\r\n".
"Content-Transfer-Encoding: quoted-printable\r\n\r\n".
$plaincontent."\r\n\r\n".

"--1__".$random_hash."\r\n".
"Content-type: text/html; charset=UTF-8\r\n".
"Content-Disposition: inline\r\n".
"Content-Transfer-Encoding: quoted-printable\r\n\r\n".
$htmlcontent."\r\n\r\n\r\n".

"--1__".$random_hash."--\r\n\r\n\r\n".

"--0__".$random_hash."\r\n".
"Content-type: image/png; name=\"kk_face.png\""."\r\n".
"Content-Disposition: inline; filename=\"kk_face.png\""."\r\n".
"Content-ID: <1__".$random_hash."@brandingpays.com>\r\n".
"Content-transfer-encoding: base64"."\r\n".'

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
gg==

'."--0__".$random_hash."\r\n".
"Content-type: image/jpg; name=\"brandingpays_logo_email.jpg\""."\r\n".
"Content-Disposition: inline; filename=\"brandingpays_logo_email.jpg\"\r\n".
"Content-transfer-encoding: base64"."\r\n".
"Content-ID: <2__".$random_hash."@brandingpays.com>\r\n".'

/9j/4AAQSkZJRgABAQEBLAEsAAD/4gxYSUNDX1BST0ZJTEUAAQEAAAxITGlubwIQAABtbnRyUkdC
IFhZWiAHzgACAAkABgAxAABhY3NwTVNGVAAAAABJRUMgc1JHQgAAAAAAAAAAAAAAAQAA9tYAAQAA
AADTLUhQICAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABFj
cHJ0AAABUAAAADNkZXNjAAABhAAAAGx3dHB0AAAB8AAAABRia3B0AAACBAAAABRyWFlaAAACGAAA
ABRnWFlaAAACLAAAABRiWFlaAAACQAAAABRkbW5kAAACVAAAAHBkbWRkAAACxAAAAIh2dWVkAAAD
TAAAAIZ2aWV3AAAD1AAAACRsdW1pAAAD+AAAABRtZWFzAAAEDAAAACR0ZWNoAAAEMAAAAAxyVFJD
AAAEPAAACAxnVFJDAAAEPAAACAxiVFJDAAAEPAAACAx0ZXh0AAAAAENvcHlyaWdodCAoYykgMTk5
OCBIZXdsZXR0LVBhY2thcmQgQ29tcGFueQAAZGVzYwAAAAAAAAASc1JHQiBJRUM2MTk2Ni0yLjEA
AAAAAAAAAAAAABJzUkdCIElFQzYxOTY2LTIuMQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAWFlaIAAAAAAAAPNRAAEAAAABFsxYWVogAAAAAAAAAAAAAAAA
AAAAAFhZWiAAAAAAAABvogAAOPUAAAOQWFlaIAAAAAAAAGKZAAC3hQAAGNpYWVogAAAAAAAAJKAA
AA+EAAC2z2Rlc2MAAAAAAAAAFklFQyBodHRwOi8vd3d3LmllYy5jaAAAAAAAAAAAAAAAFklFQyBo
dHRwOi8vd3d3LmllYy5jaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAABkZXNjAAAAAAAAAC5JRUMgNjE5NjYtMi4xIERlZmF1bHQgUkdCIGNvbG91ciBzcGFjZSAt
IHNSR0IAAAAAAAAAAAAAAC5JRUMgNjE5NjYtMi4xIERlZmF1bHQgUkdCIGNvbG91ciBzcGFjZSAt
IHNSR0IAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZGVzYwAAAAAAAAAsUmVmZXJlbmNlIFZpZXdpbmcg
Q29uZGl0aW9uIGluIElFQzYxOTY2LTIuMQAAAAAAAAAAAAAALFJlZmVyZW5jZSBWaWV3aW5nIENv
bmRpdGlvbiBpbiBJRUM2MTk2Ni0yLjEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHZpZXcAAAAA
ABOk/gAUXy4AEM8UAAPtzAAEEwsAA1yeAAAAAVhZWiAAAAAAAEwJVgBQAAAAVx/nbWVhcwAAAAAA
AAABAAAAAAAAAAAAAAAAAAAAAAAAAo8AAAACc2lnIAAAAABDUlQgY3VydgAAAAAAAAQAAAAABQAK
AA8AFAAZAB4AIwAoAC0AMgA3ADsAQABFAEoATwBUAFkAXgBjAGgAbQByAHcAfACBAIYAiwCQAJUA
mgCfAKQAqQCuALIAtwC8AMEAxgDLANAA1QDbAOAA5QDrAPAA9gD7AQEBBwENARMBGQEfASUBKwEy
ATgBPgFFAUwBUgFZAWABZwFuAXUBfAGDAYsBkgGaAaEBqQGxAbkBwQHJAdEB2QHhAekB8gH6AgMC
DAIUAh0CJgIvAjgCQQJLAlQCXQJnAnECegKEAo4CmAKiAqwCtgLBAssC1QLgAusC9QMAAwsDFgMh
Ay0DOANDA08DWgNmA3IDfgOKA5YDogOuA7oDxwPTA+AD7AP5BAYEEwQgBC0EOwRIBFUEYwRxBH4E
jASaBKgEtgTEBNME4QTwBP4FDQUcBSsFOgVJBVgFZwV3BYYFlgWmBbUFxQXVBeUF9gYGBhYGJwY3
BkgGWQZqBnsGjAadBq8GwAbRBuMG9QcHBxkHKwc9B08HYQd0B4YHmQesB78H0gflB/gICwgfCDII
RghaCG4IggiWCKoIvgjSCOcI+wkQCSUJOglPCWQJeQmPCaQJugnPCeUJ+woRCicKPQpUCmoKgQqY
Cq4KxQrcCvMLCwsiCzkLUQtpC4ALmAuwC8gL4Qv5DBIMKgxDDFwMdQyODKcMwAzZDPMNDQ0mDUAN
Wg10DY4NqQ3DDd4N+A4TDi4OSQ5kDn8Omw62DtIO7g8JDyUPQQ9eD3oPlg+zD88P7BAJECYQQxBh
EH4QmxC5ENcQ9RETETERTxFtEYwRqhHJEegSBxImEkUSZBKEEqMSwxLjEwMTIxNDE2MTgxOkE8UT
5RQGFCcUSRRqFIsUrRTOFPAVEhU0FVYVeBWbFb0V4BYDFiYWSRZsFo8WshbWFvoXHRdBF2UXiReu
F9IX9xgbGEAYZRiKGK8Y1Rj6GSAZRRlrGZEZtxndGgQaKhpRGncanhrFGuwbFBs7G2MbihuyG9oc
AhwqHFIcexyjHMwc9R0eHUcdcB2ZHcMd7B4WHkAeah6UHr4e6R8THz4faR+UH78f6iAVIEEgbCCY
IMQg8CEcIUghdSGhIc4h+yInIlUigiKvIt0jCiM4I2YjlCPCI/AkHyRNJHwkqyTaJQklOCVoJZcl
xyX3JicmVyaHJrcm6CcYJ0kneierJ9woDSg/KHEooijUKQYpOClrKZ0p0CoCKjUqaCqbKs8rAis2
K2krnSvRLAUsOSxuLKIs1y0MLUEtdi2rLeEuFi5MLoIuty7uLyQvWi+RL8cv/jA1MGwwpDDbMRIx
SjGCMbox8jIqMmMymzLUMw0zRjN/M7gz8TQrNGU0njTYNRM1TTWHNcI1/TY3NnI2rjbpNyQ3YDec
N9c4FDhQOIw4yDkFOUI5fzm8Ofk6Njp0OrI67zstO2s7qjvoPCc8ZTykPOM9Ij1hPaE94D4gPmA+
oD7gPyE/YT+iP+JAI0BkQKZA50EpQWpBrEHuQjBCckK1QvdDOkN9Q8BEA0RHRIpEzkUSRVVFmkXe
RiJGZ0arRvBHNUd7R8BIBUhLSJFI10kdSWNJqUnwSjdKfUrESwxLU0uaS+JMKkxyTLpNAk1KTZNN
3E4lTm5Ot08AT0lPk0/dUCdQcVC7UQZRUFGbUeZSMVJ8UsdTE1NfU6pT9lRCVI9U21UoVXVVwlYP
VlxWqVb3V0RXklfgWC9YfVjLWRpZaVm4WgdaVlqmWvVbRVuVW+VcNVyGXNZdJ114XcleGl5sXr1f
D19hX7NgBWBXYKpg/GFPYaJh9WJJYpxi8GNDY5dj62RAZJRk6WU9ZZJl52Y9ZpJm6Gc9Z5Nn6Wg/
aJZo7GlDaZpp8WpIap9q92tPa6dr/2xXbK9tCG1gbbluEm5rbsRvHm94b9FwK3CGcOBxOnGVcfBy
S3KmcwFzXXO4dBR0cHTMdSh1hXXhdj52m3b4d1Z3s3gReG54zHkqeYl553pGeqV7BHtje8J8IXyB
fOF9QX2hfgF+Yn7CfyN/hH/lgEeAqIEKgWuBzYIwgpKC9INXg7qEHYSAhOOFR4Wrhg6GcobXhzuH
n4gEiGmIzokziZmJ/opkisqLMIuWi/yMY4zKjTGNmI3/jmaOzo82j56QBpBukNaRP5GokhGSepLj
k02TtpQglIqU9JVflcmWNJaflwqXdZfgmEyYuJkkmZCZ/JpomtWbQpuvnByciZz3nWSd0p5Anq6f
HZ+Ln/qgaaDYoUehtqImopajBqN2o+akVqTHpTilqaYapoum/adup+CoUqjEqTepqaocqo+rAqt1
q+msXKzQrUStuK4trqGvFq+LsACwdbDqsWCx1rJLssKzOLOutCW0nLUTtYq2AbZ5tvC3aLfguFm4
0blKucK6O7q1uy67p7whvJu9Fb2Pvgq+hL7/v3q/9cBwwOzBZ8Hjwl/C28NYw9TEUcTOxUvFyMZG
xsPHQce/yD3IvMk6ybnKOMq3yzbLtsw1zLXNNc21zjbOts83z7jQOdC60TzRvtI/0sHTRNPG1EnU
y9VO1dHWVdbY11zX4Nhk2OjZbNnx2nba+9uA3AXcit0Q3ZbeHN6i3ynfr+A24L3hROHM4lPi2+Nj
4+vkc+T85YTmDeaW5x/nqegy6LzpRunQ6lvq5etw6/vshu0R7ZzuKO6070DvzPBY8OXxcvH/8ozz
GfOn9DT0wvVQ9d72bfb794r4Gfio+Tj5x/pX+uf7d/wH/Jj9Kf26/kv+3P9t////4QDWRXhpZgAA
TU0AKgAAAAgABwESAAMAAAABAAEAAAEaAAUAAAABAAAAYgEbAAUAAAABAAAAagEoAAMAAAABAAIA
AAExAAIAAAAeAAAAcgEyAAIAAAAUAAAAkIdpAAQAAAABAAAApAAAAAAAAAEsAAAAAQAAASwAAAAB
QWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2gAMjAxMDoxMDoxMyAxNzo1MToyNAAAA6ABAAMA
AAABAAEAAKACAAQAAAABAAABCqADAAQAAAABAAAAPwAAAAD/2wBDAAIBAQIBAQICAQICAgICAwUD
AwMDAwYEBAMFBwYHBwcGBgYHCAsJBwgKCAYGCQ0JCgsLDAwMBwkNDg0MDgsMDAv/2wBDAQICAgMC
AwUDAwULCAYICwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsL
Cwv/wgARCAA/AQoDASIAAhEBAxEB/8QAHQABAAMAAgMBAAAAAAAAAAAAAAYHCAEFAgQJA//EABsB
AQACAgMAAAAAAAAAAAAAAAAFBgIDAQQH/9oADAMBAAIQAxAAAAHfwAAAAAAAAAAAAHCo9/FuRqjZ
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
b8L/AG7ntUPbJN/8f//Z

'."--0__".$random_hash."--\r\n".
"";

echo "<h3>Mail sent as follows</h3>\n";
echo "<table border='1' cellspacing='0' cellpadding='2'>\n";
$people_array = explode("\n",$people_list);
for($i = 0; $i < count($people_array); $i++){
	$line=$people_array[$i];
	$line_array = explode(":",$line);
	$at_position = strpos($line_array[0],"@");
	if($at_position!==false && $at_position>0){
		$email_address = $line_array[1]." <".$line_array[0]."> ";
		if($send_emails){
			if (!mail($email_address, $subject, $body, $headers)) {
				echo "<tr><td>".$i."</td><td style='color:red'>MAIL FAILURE</td><td>".htmlspecialchars($email_address)."</td></tr>\n";
			}else{
				echo "<tr><td>".$i."</td><td>SENT</td><td>".htmlspecialchars($email_address)."</td></tr>\n";
			}
		}else{
			echo "<tr><td>".$i."</td><td>WOULD HAVE BEEN SENT</td><td>".htmlspecialchars($email_address)."</td></tr>\n";
		}
	}else{
		echo "<tr><tr><td>".$i."</td><td style='color:red'>NOT SENT</td><td>".htmlspecialchars($line)."</td></tr>\n";
	}
}
echo "</table>\n";
exit(0);

?>
