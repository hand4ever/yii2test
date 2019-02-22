<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex($message = 'hello world')
    {
        $redis = Yii::$app->redis;
        $redis->set('aaa', 1111);

        var_dump($redis->get('aaa'));

        $r = new \Redis;
        $r->connect('localhost', 6379);


        var_dump($r->get('aaa'));
//        var_dump($redis instanceof Redis);
//        Yii::info('user 3333', 'test');
        // Yii::trace("222 ....", 'test');
        // Yii::error("3 ....", 'test');
        // Yii::warning("4 ....", 'test');
        echo $message . "\n";

        return ExitCode::OK;
    }
}
