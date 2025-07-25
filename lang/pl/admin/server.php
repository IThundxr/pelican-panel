<?php

return [
    'nav_title' => 'Serwery',
    'model_label' => 'Serwer',
    'model_label_plural' => 'Serwery',
    'no_servers' => 'Brak serwerów',
    'next_step' => 'Następny Krok',
    'ip_address' => 'Adres IP',
    'ip_address_helper' => 'Zwykle publiczny adres IP urządzenia, chyba że przekierowywujesz port.',
    'port' => 'Port',
    'ports' => 'Porty',
    'alias' => 'Alias',
    'alias_helper' => 'Opcjonalna nazwa, która pomoże Ci zapamiętać co to jest.',
    'name' => 'Nazwa',
    'external_id' => 'Zewnętrzne ID',
    'owner' => 'Właściciel',
    'description' => 'Opis',
    'install_script' => 'Uruchomić skrypt instalacyjny?',
    'start_after' => 'Uruchomić po zainstalowaniu?',
    'yes' => 'Tak',
    'no' => 'Nie',
    'skip' => 'Pomiń',
    'primary' => 'Podstawowy',
    'already_primary' => 'Jest już głównym',
    'make_primary' => 'Ustaw jako główny',
    'startup_cmd' => 'Komenda startowa',
    'default_startup' => 'Domyślna komenda startowa',
    'variables' => 'Zmienne',
    'resource_limits' => 'Limity zasobów',
    'cpu' => 'Procesor',
    'cpu_limit' => 'Limit procesora',
    'cpu_helper' => '100% równa się jednemu rdzeniu procesora.',
    'unlimited' => 'Nieograniczone',
    'limited' => 'Ograniczone',
    'enabled' => 'Włączony',
    'disabled' => 'Wyłączony',
    'memory' => 'Pamięć',
    'memory_limit' => 'Limit pamięci',
    'memory_helper' => 'Wings doda trochę dodatkowej pamięci do tej wartości podczas tworzenia kontenera, aby upewnić się, że nie dojdzie do wyczerpania pamięci przy używaniu maksymalnej ilości pamięci.',
    'disk' => 'Miejsce na dysku',
    'disk_limit' => 'Limit przestrzeni dyskowej',
    'advanced_limits' => 'Zaawansowane limity',
    'cpu_pin' => 'Przypisywanie rdzeni CPU',
    'threads' => 'Przypięte wątki',
    'pin_help' => 'Dodaj przypięty wątek, np. 0 lub 2-4',
    'swap' => 'Pamięć Swap',
    'swap_limit' => 'Limit pamięci Swap',
    'oom' => 'OOM Killer',
    'feature_limits' => 'Limity funkcji',
    'docker_settings' => 'Ustawienia Dockera',
    'docker_image' => 'Obraz dockera',
    'image_name' => 'Nazwa obrazu',
    'primary_allocation' => 'Podstawowa alokacja',
    'image' => 'Obraz',
    'image_placeholder' => 'Wprowadź niestandardowy obraz',
    'container_labels' => 'Etykiety kontenerów',
    'title' => 'Tytuł',
    'actions' => 'Działania',
    'console' => 'Konsola',
    'suspend' => 'Zawieś',
    'unsuspend' => 'Odwieś',
    'reinstall' => 'Zainstaluj ponownie',
    'reinstall_help' => 'Spowoduje to ponowną instalację serwera z przypisanym skryptem instalacyjnym jaja.',
    'reinstall_modal_heading' => 'Czy na pewno chcesz przeinstalować serwer?',
    'reinstall_modal_description' => '!! Może to spowodować nieodwracalną utratę danych !!!',
    'server_status' => 'Status serwera',
    'view_install_log' => 'Zobacz dziennik instalacji',
    'uuid' => 'UUID',
    'node' => 'Węzeł',
    'short_uuid' => 'Krótki UUID',
    'toggle_install' => 'Przełącz status instalacji',
    'toggle_install_help' => 'Jeśli chcesz zmienić status instalacji z „niezainstalowany” na „zainstalowany” lub odwrotnie, możesz to zrobić za pomocą tego przycisku.',
    'toggle_install_failed_header' => 'Serwer jest w stanie niepowodzenia',
    'toggle_install_failed_desc' => 'Czy chcesz przeinstalować serwer, aby to naprawić?',
    'transfer' => 'Przeniesienie',
    'transfer_help' => 'Przenieś ten serwer na inny węzeł połączony z tym panelem.<br/><b>Uwaga!</b> Ta funkcja jest wciąż eksperymentalna. Zastanów się nad ręcznym wykonaniem kopii zapasowej, aby uniknąć utraty danych!',
    'condition' => 'Warunek',
    'suspend_all' => 'Zawieś wszystkie serwery',
    'unsuspend_all' => 'Cofnij zawieszenie wszystkich serwerów',
    'select_allocation' => 'Wybierz alokację',
    'new_allocation' => 'Utwórz nowe alokacje',
    'additional_allocations' => 'Dodatkowe alokacje',
    'select_additional' => 'Wybierz dodatkowe alokacje',
    'no_variables' => 'Wybrane jajko nie ma zmiennych!',
    'select_egg' => 'Najpierw wybierz jajo, aby wyświetlić jego zmienne!',
    'allocations' => 'Alokacje',
    'databases' => 'Bazy danych',
    'no_databases' => 'Brak baz danych dla tego serwera',
    'delete_db' => 'Czy jesteś pewny że chcesz to usunąć?',
    'delete_db_heading' => 'Usuń Bazę Danych',
    'backups' => 'Kopie zapasowe',
    'egg' => 'Jajko',
    'mounts' => 'Punkty montowania',
    'no_mounts' => 'Brak punktów montowania dla tego węzła.',
    'create_database' => 'Utwórz bazę danych',
    'no_db_hosts' => 'Brak hostów bazy danych',
    'failed_to_create' => 'Nie udało się utworzyć bazy danych',
    'change_egg' => 'Zmień Jajko',
    'new_egg' => 'Nowe Jajko',
    'keep_old_variables' => 'Jeśli to możliwe, zachować stare zmienne?',
    'create_allocation' => 'Utwórz alokację',
    'add_allocation' => 'Dodaj alokację',
    'view' => 'Wyświetl',
    'no_log' => 'Brak dostępnych dzienników',
    'tabs' => [
        'information' => 'Informacje',
        'egg_configuration' => 'Konfiguracja Jajka',
        'environment_configuration' => 'Konfiguracja środowiska',
    ],
    'notifications' => [
        'server_suspension' => 'Zawieszenie serwera',
        'server_suspended' => 'Serwer został zawieszony',
        'server_suspend_help' => 'Spowoduje to zawieszenie serwera, zatrzymanie wszystkich uruchomionych procesów, i natychmiast blokuje użytkownikowi dostęp do swoich plików lub zarządzanie serwerem w inny sposób za pośrednictwem panelu lub API.',
        'server_unsuspend_help' => 'Spowoduje to odwieszenie serwera i przywrócenie normalnego dostępu użytkownikom.',
        'server_unsuspended' => 'Serwer został odwieszony.',
        'error_server_delete' => 'Serwer nie mógł zostać bezpiecznie usunięty.',
        'error_server_delete_body' => 'Możesz wymusić jego usunięcie.',
        'create_failed' => 'Nie można utworzyć serwera',
        'invalid_port_range' => 'Nieprawidłowy zakres portu',
        'invalid_port_range_body' => 'Zakres portów nie jest prawidłową liczbą całkowitą: :port',
        'too_many_ports' => 'Zbyt wiele portów jednocześnie!',
        'too_many_ports_body' => 'Obecny limit wynosi :limit liczby portów jednocześnie.',
        'invalid_port' => 'Port nie jest w prawidłowym zakresie',
        'invalid_port_body' => ':i nie mieści się w dozwolonym zakresie portów między :portFloor a :portCeil.',
        'already_exists' => 'Port jest już używany',
        'already_exists_body' => ':i jest już przypisany do alokacji.',
        'error_connecting' => 'Błąd połączenia z węzłem :node',
        'error_connecting_description' => 'Konfiguracja nie mogła zostać automatycznie zsynchronizowana na Wings, konieczny będzie ręczny restart serwera.',
        'install_toggled' => 'Status instalacji zmieniony',
        'install_toggle_failed' => 'Nie można zmienić statusu instalacji',
        'reinstall_started' => 'Rozpoczęto reinstalację',
        'reinstall_failed' => 'Nie można uruchomić reinstalacji',
        'log_failed' => 'Nie udało się nawiązać połączenia z Wings, aby pobrać dziennik instalacji serwera.',
    ],
    'notes' => 'Notatki',
    'no_notes' => 'Brak Notatek',
];
