Yii PHP Framework Version 2 / NOX Cron Jobs
===================================================

Yii2 NOX Cron Jobs é um Crontroller para Console do Yii2 e é responsável por executar vários jobs na Crontab (Scripts do Console).

Esta é baseada [nesta](https://github.com/DenisOgr/yii2-cronjobs).

Instalação
----------

- **Passo 1:** O melhor método para instalar esta extensao é via [composer](http://getcomposer.org/download/).

Execute o comando:

```
php composer.phar require --prefer-dist nox-it/yii2-nox-cron-jobs "1.*"
```

ou adicione:

```
"nox-it/yii2-nox-cron-jobs": "1.*"
```

na seção "require" do seu arquivo `composer.json`.
- **Passo 2:** Crie o "alias" @runnerScript na configuração do Console. Este é o caminho absoluto do script.
```
Yii::setAlias('@runnerScript', dirname(dirname(dirname(__FILE__))) .'/yii');
```
- **Passo 3:** Adicione à configuração:
```
'controllerMap' => [
       'cron' => [
           'class' => 'nox\console\controllers\CronController'
       ],
   ],
```
- **Passo 4:**  Adicione ao agendador de tarefas do seu sistema (cron no unix, agendador de tarefas no windows) para ser executado a todo minuto:

```sh
* * * * * /path/to/yii/yii cron
```

Uso
---

Adicione no array de parâmetros um array com as configurações da cron:
```
'cronJobs' =>[
    'jobs/first'  => ['cron' => '* * * * *'],
    'jobs/second' => ['cron' => '10 * * * *']
]
```

![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)
