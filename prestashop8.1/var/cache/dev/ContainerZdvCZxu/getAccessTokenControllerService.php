<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] ?? ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] = new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository())), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC2qr/X7i7zsVJB'."\n".'pwyw0FHhhRLOo1z3BQHcjqicZnXByxmgnuKRud6bhj7I4G27MTYtqoPqcoZJtftB'."\n".'zDC2w9rIo2dpjL47Peq3q3G4WoxZ2B7mI36rH6OXK6KCWc5KsweDlL7scvPibGXc'."\n".'UwdiQBP9y+guHrlAY/7XQ6nmHsX51fVgWyoOvifIQ4GroqMUOO4lnnompS4REDnw'."\n".'bUxBg0K0KM58s32KlMvTnYbGpkzQF2M1rzemS2r1VBjKxKBW4+QJeET5yA/LG6h1'."\n".'92vpnQ2Wj5nu6lK9oWMwFU7tcIJ7nFQYMKSy6JSUbtFSfZ8Lf1HhgGSrqrNlMg/6'."\n".'HS5nDwn/AgMBAAECggEAGR5ZyyOhqTkVCpoiEJ5U5CIcd/XW7tDtdJrZbMhaIRAA'."\n".'simnFkrs5Y4MTCswa7FUtergwPiGptQzfNTLThaYm0Z9DfKgphzZjfAxbxxkeGZT'."\n".'uWngHT/4iu0hJ7OZvoPn4JwvtOwJxXUKfMWeGlCdbyT/BHiNGOGnRYq0bkSFDNm3'."\n".'oijCPDt/kkLr790XO4/EWEY5ecphP5LyZlKEWI/ztLAo5lbVWJbD0nzN/QcNR7B4'."\n".'1l5GihjNyemhZq+ZZh495B+WCvUNZ5cU+RIC8Xyy4kCnMqvrV+wskR1Baatm/2Rs'."\n".'1h0nQhQb8A81f0Nzkf2XTJ5oxBiLnWuaJMvrtK21gQKBgQDPfjKtTS2LNGmqWnA0'."\n".'1JDRGs7OGAZbliKEeU/aVqqIhthhL9CQ6cSAXbN3tFDhMC3/OmI/UMFqyL8BMz1r'."\n".'uDDV5fl6wmHGvgsnhU+EORAov/LINHE4Czzim35XxCl9Mdflu3wbZDGaD6Ly86YJ'."\n".'XYjA86ieKKRk5a41gqig2AfgDwKBgQDhXsuHotYoD4TmWbCU3PGh3sPOJQJFwV8N'."\n".'Qylp4EVYquABZeRL+h7pl8HSV9fpVMFD+NN6T+BcIl9dzdAmtW9VbcPQKpXibaIK'."\n".'/d2JR8wPQC8+CI80RGqCs+YXWRdHVtnJTf2sNmqtlsYHi+zAlt0w2iMSAItfCB23'."\n".'Oyy6FUtHEQKBgQCrQ5D0tnVXJ0XoVIm1MZbu4d+9ANuOkRegnLkqkMplsle7sEnI'."\n".'swt8oNrXfUAc/zWYK0qY1EExsMznYrHZzciRZSdNClDGSGrQjhqaGreZywXL9m1V'."\n".'QwFYUdww+Tr9mTyI5P2FZmgCr9FiE3YC2O9dxEBzezxmA6aNiHFDgczORQKBgEq5'."\n".'xb5pbZzG2IgQQQ5629uSI1Zcyw4Z+cxJ8pdad2PY9IFCKZpPiqRlXyzBV6PUKGjD'."\n".'PkuV5IxoETrnHRdYnVu0E3MYS65SL6J5XlVAaxa7b26gI+tuq+o+gBJJxgAvefLX'."\n".'Wz8Yo/J+xZaG/K821ox2J562c3/FDyVMB56DpPwhAoGBALD6lZZDdtfK53kpuja5'."\n".'S6QuEkFXHsNWZB6FZt9rmuXY5b3SfGZeq4zCk191pKWdEVZydLO8lTgTRhXSKYcE'."\n".'9a5Ykkp/hhyoViBvqKJI4w1HSf1Uqb2ExtFWDBhjbiS/4Nb55ms/Ca1eb+5e3Nl2'."\n".'qZMDknV5Pq6E+PE8C9MoEtJe'."\n".'-----END PRIVATE KEY-----'."\n".''), 'def000000ef9bd2485bd67c543ac182183cbef9ab12914b4a1411328246dd1067851e9110b414bd004a6d8f6e12df02e69e603cb02e17cd8e81ced973c40478b9e751b02');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, ($this->privates['Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory'] ?? $this->load('getPsrHttpFactoryService.php')), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), ($this->privates['Nyholm\\Psr7\\Factory\\Psr17Factory'] ?? ($this->privates['Nyholm\\Psr7\\Factory\\Psr17Factory'] = new \Nyholm\Psr7\Factory\Psr17Factory())));
