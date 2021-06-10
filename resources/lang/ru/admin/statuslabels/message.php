<?php

return [

    'does_not_exist' => 'Ярлык состояния не существует.',
    'assoc_assets'	 => 'Этот ярлык состояния связан как минимум с одним активом и не может быть удален. Измените состояние ваших активов и попробуйте ещё раз. ',

    'create' => [
        'error'   => 'Ярлык состояния не создан, попробуйте еще раз.',
        'success' => 'Ярлык состояния успешно создан.',
    ],

    'update' => [
        'error'   => 'Ярлык состояния не обновлен, попробуйте еще раз',
        'success' => 'Ярлык состояния успешно обновлен.',
    ],

    'delete' => [
        'confirm'   => 'Вы уверены что хотите удалить это состояние?',
        'error'   => 'При удалении состояния возникла проблема. Пожалуйста попробуйте снова.',
        'success' => 'Ярлык состояние был успешно удален.',
    ],

    'help' => [
        'undeployable'   => 'Эти активы не могут быть назначены никому.',
        'deployable'   => 'Эти активы можно проверить. После того, как они будут назначены, они будут принимать мета статус: <i class="fa fa-circle text-blue"></i> <strong>Deployed</strong>.',
        'archived'   => 'Эти активы не могут быть проверены и будут отображаться только в архивированном виде. Это полезно для сохранения информации об активах для составления бюджета / исторических целей, но не оставляя их вне списка текущих активов.',
        'pending'   => 'Эти активы еще не могут быть назначены никому, часто используемым для предметов, которые не подлежат ремонту, но, как ожидается, возвращаются в обращение.',
    ],

];
