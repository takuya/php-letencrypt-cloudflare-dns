<?php

namespace Takuya\LEClientDNS01\Delegators;

interface DnsAPIForLEClient {
  public function addDnsTxtRecord ( $domain, $content ): bool;
  
  public function removeTxtRecord ( $domain, $content ): bool;
  
  public function waitForUpdated ( $name, $type, $content, callable $on_wait = null );
}