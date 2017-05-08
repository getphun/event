# event

Event provider. Modul ini memungkinkan satu modul memberitahukan ke modul lain atau
modul yang sama ketika suatu acara terjadi. Modul `event` menyediakan satu service
dengan nama `fire` yang bisa di panggil dari kontroler dengan perintah
`$this->fire('event-name', $arg0, $arg1)`.

Semua event harus didaftarkan di file konfigurasi aplikasi atau file konfigurasi
modul:

```php
<?php

return [
    'name' => 'Phun',
    
    'events' => [
        'post:created' => [
            'post' => 'Post\\Event\\Post::create'
        ]
    ]
];
```

Kemudian dari kontroler post, panggil service `fire` agar listener dieksekusi:

```php
<?php

...
    public function editAction(){
        $this->event->fire('post:created', $post);
    }
...
```