<?php
/**
 * This file was created by Translation Editor v5.2
 * On 2016-12-07 12:56
 */

return array (
  'admin:elasticsearch:inspect' => 'Inspecteren',
  'elasticsearch:inspect:guid' => 'Geef de GUID op van de entity die je wilt inspecteren',
  'elasticsearch:inspect:guid:help' => 'Alle entiteiten in Elgg hebben een GUID, meestal kun je deze vinden middels de URL van de entity (bijv. blog/view/1234)',
  'elasticsearch:inspect:submit' => 'Inspecteer',
  'elasticsearch:inspect:result:title' => 'Inspectie resultaten',
  'elasticsearch:inspect:result:elgg' => 'Elgg',
  'elasticsearch:inspect:result:elasticsearch' => 'Elasticsearch',
  'elasticsearch:inspect:result:error:type_subtype' => 'Het type/subtype van deze entity wordt niet ondersteund om te worden geïndexeerd in Elasticsearch',
  'elasticsearch:inspect:result:error:not_indexed' => 'De entity is nog niet geïndexeerd',
  'elasticsearch:inspect:result:last_indexed:none' => 'Deze entity is nog niet geïndexeerd',
  'elasticsearch:inspect:result:last_indexed:scheduled' => 'Deze entity is ingepland om te worden geïndexeerd',
  'elasticsearch:inspect:result:last_indexed:time' => 'Deze entity is voor het laatst geïndexeerd: %s',
  'elasticsearch:inspect:result:reindex' => 'Inplannen voor herindexatie',
  'elasticsearch:action:admin:reindex_entity:success' => 'De entity is ingepland om te worden geherindexeerd',
  'admin:elasticsearch' => 'ElasticSearch',
  'admin:elasticsearch:statistics' => 'Statistieken',
  'admin:elasticsearch:search' => 'Zoeken',
  'admin:elasticsearch:logging' => 'Log',
  'admin:elasticsearch:indices' => 'Indices',
  'elasticsearch:admin_search:results' => 'Zoek Resultaten',
  'elasticsearch:admin_search:results:info' => 'Resultaten worden hier getoond',
  'elasticsearch:error:no_client' => 'Het is niet gelukt om een ElasticSearch client te maken',
  'elasticsearch:error:host_unavailable' => 'ElasticSearch API host niet beschikbaar',
  'elasticsearch:error:no_index' => 'Geen index opgegeven voor de actie',
  'elasticsearch:error:index_not_exists' => 'De opgegeven index bestaat niet: %s',
  'elasticsearch:error:alias_not_configured' => 'Er is geen alias geconfigureerd in de plugin instellingen',
  'elasticsearch:error:search' => 'Er geen iets mis bij het uitvoeren van de zoekopdracht. Neem contact op met de beheerder van de site indien het probleem blijvend is.',
  'elasticsearch:settings:host:header' => 'ElasticSearch host instellingen',
  'elasticsearch:settings:host' => 'API host',
  'elasticsearch:settings:host:description' => 'Je kunt meerdere hosts opgeven door ze te scheiden met een comma (,).',
  'elasticsearch:settings:index' => 'Index voor de Elgg data',
  'elasticsearch:settings:search_alias' => 'Zoek index alias (optioneel)',
  'elasticsearch:settings:index:suggestion' => 'Je moet een index configureren om alle Elgg data in op te slaan. Indien je niet weet welke index je wilt gebruiken, misschien is \'%s\' een optie?',
  'elasticsearch:settings:features:header' => 'Instellingen',
  'elasticsearch:settings:sync' => 'Synchroniseer Elgg data naar ElasticSearch',
  'elasticsearch:settings:search_alias:description' => 'Indien je in meer dan 1 index wilt zoeken, dan kun je een alias configureren waarin gezocht wordt. De alias zal dan moeten worden toegevoegd aan de Elgg index.',
  'elasticsearch:settings:sync:description' => 'Synchronisatie moet worden aangezet. Als je nog niet klaar bent om data te laten indexeren kun je dat hiermee bepalen.',
  'elasticsearch:settings:search' => 'Gebruik ElasticSearch als de search engine',
  'elasticsearch:settings:search:description' => 'Zodra ElasticSearch goed is ingericht en gevuld is met data, kun je hiermee bepalen of de zoekresultaten uit ElasticSearch komen.',
  'elasticsearch:stats:cluster' => 'Cluster informatie',
  'elasticsearch:stats:cluster_name' => 'Cluster naam',
  'elasticsearch:stats:es_version' => 'ElasticSearch versie',
  'elasticsearch:stats:lucene_version' => 'Lucene versie',
  'elasticsearch:stats:index:index' => 'Index: %s',
  'elasticsearch:stats:index:stat' => 'Statistiek',
  'elasticsearch:stats:index:value' => 'Waarde',
  'elasticsearch:stats:elgg' => 'Elgg informatie',
  'elasticsearch:stats:elgg:total' => 'Content die geïndexeerd moet worden',
  'elasticsearch:stats:elgg:no_index_ts' => 'Nieuwe content die geïndexeerd moet worden',
  'elasticsearch:stats:elgg:update' => 'Bijgewerkte content die geïndexeerd moet worden',
  'elasticsearch:stats:elgg:reindex' => 'Content die geherindexeerd moet worden',
  'elasticsearch:stats:elgg:reindex:action' => 'Je kunt een herindexatie forceren van alle content door hier te klikken.',
  'elasticsearch:stats:elgg:reindex:last_ts' => 'Huidige tijd die gebruikt wordt om te bepalen of er geherindexeerd moet worden: %s',
  'elasticsearch:stats:elgg:delete' => 'Content die nog verwijderd moet worden',
  'elasticsearch:indices:index' => 'Index',
  'elasticsearch:indices:alias' => 'Alias',
  'elasticsearch:logging:root' => 'Log begin',
  'elasticsearch:logging:description' => 'Hier kun je de logs vinden van de ElasicSearch API interface. Logbestanden zijn gescheiden op jaar, maand en dag.',
  'elasticsearch:indices:create' => 'Aanmaken',
  'elasticsearch:indices:add_mappings' => 'Mappings toevoegen',
  'elasticsearch:indices:optimize' => 'Optimaliseren',
  'elasticsearch:indices:flush' => 'Flush',
  'elasticsearch:menu:search_list:sort:title' => 'Wijzig de volgorde van de zoekresultaten',
  'elasticsearch:menu:search_list:sort:relevance' => 'Relevantie',
  'elasticsearch:menu:search_list:sort:alpha_az' => 'Alfabetisch (A-Z)',
  'elasticsearch:menu:search_list:sort:alpha_za' => 'Alfabetisch (Z-A)',
  'elasticsearch:menu:search_list:sort:newest' => 'Nieuwste eerst',
  'elasticsearch:menu:search_list:sort:oldest' => 'Oudste eerst',
  'elasticsearch:menu:search_list:sort:member_count' => 'Aantal leden',
  'elasticsearch:forms:admin_search:query:placeholder' => 'Voer hier je zoekopdracht in',
  'elasticsearch:action:admin:index_management:error:flush' => 'Er is een fout opgetreden tijdens het flushen van de index: %s',
  'elasticsearch:action:admin:index_management:error:optimize' => 'Er is een fout opgetreden tijdens het optimaliseren van de index: %s',
  'elasticsearch:action:admin:index_management:error:delete' => 'Er is een fout opgetreden tijdens het deleten van de index: %s',
  'elasticsearch:action:admin:index_management:error:create:exists' => 'Je kunt index \'%s\' niet aanmaken, want hij bestaat al.',
  'elasticsearch:action:admin:index_management:error:create' => 'Er is een fout opgetreden tijdens het aanmaken van de index: %s',
  'elasticsearch:action:admin:index_management:error:add_mappings' => 'Er is een fout opgetreden tijdens het aanmaken van de mappings voor de index: %s',
  'elasticsearch:action:admin:index_management:error:task' => 'De taak \'%s\' wordt niet ondersteund',
  'elasticsearch:action:admin:index_management:error:add_alias:exists' => 'De alias \'%s\' bestaat al voor de index \'%s\'',
  'elasticsearch:action:admin:index_management:error:delete_alias:exists' => 'De alias \'%s\' bestaat niet voor de index \'%s\'',
  'elasticsearch:action:admin:index_management:error:add_alias' => 'Er is een fout opgetreden tijdens het aanmaken van de alias \'%s\' voor de index: %s',
  'elasticsearch:action:admin:index_management:error:delete_alias' => 'Er is een fout opgetreden tijdens het verwijderen van de alias \'%s\' voor de index: %s',
  'elasticsearch:action:admin:index_management:flush' => 'De index \'%s\' is geflushed',
  'elasticsearch:action:admin:index_management:optimize' => 'De index \'%s\' is geoptimaliseerd',
  'elasticsearch:action:admin:index_management:delete' => 'De index \'%s\' is verwijderd',
  'elasticsearch:action:admin:index_management:create' => 'De index \'%s\' is aangemaakt',
  'elasticsearch:action:admin:index_management:add_mappings' => 'Mappings voor de index \'%s\' zijn aangemaakt',
  'elasticsearch:action:admin:index_management:add_alias' => 'De alias \'%s\' is toegevoegd aan de index \'%s\'',
  'elasticsearch:action:admin:index_management:delete_alias' => 'De alias \'%s\' is verwijderd van de index \'%s\'',
  'elasticsearch:suggest' => 'Bedoelde je misschien %s in plaats van %s?',
);
