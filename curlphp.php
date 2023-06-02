<?php
/**
 * PHP PHP proxy for curl aimed to API testing
 * @author Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 */
if ($argc < 2){
    echo '======================================'   . "\n";
    echo 'curlphp [URL] [DATA] [TOKEN] [METHOD]'    . "\n";
    echo '======================================'   . "\n";
    echo 'If DATA or TOKEN does not have a value,'  . "\n";
    echo 'send a void string \'\'.'                 . "\n";
    echo 'DATA is a JSON object or array.'          . "\n";
    echo 'By default, METHOD is GET.'               . "\n";
    exit;
}
$url = $argv[1];
$data = $argv[2] ?? '';
$token = $argv[3] ?? '';
$method = $argv[4] ?? '';
$command = 'curl ' . $url;
$command.= ' -H "accept: application/json';
$command.= ' -H "Content-Type: application/json';
$command.= empty($data) ? '' : ' -d ' . $data;
$command.= empty($token) ? '' : ' -H "Authorization: Bearer ' . $token . '"';
$command.= empty($method) ? '' : '-X ' . strtoupper($method);
echo shell_exec($command) . "\n";