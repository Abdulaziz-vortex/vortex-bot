<?php
include(__DIR__ . '/vendor/autoload.php');

$telegram = new Telegram('5290378673:AAHGf2ax4qMzfU4fB_CmlLmsaLfQhFx29wo');

$telegram->setWebhook('https://recollective-phases.000webhostapp.com/index.php');

$chatId = $telegram->ChatID();

$text = $telegram->Text();

if ($text === '/start') {
    $option = [
        [
            $telegram->buildKeyboardButton('πΊπΏ Uzbek'),
        ],
        [
            $telegram->buildKeyboardButton('π·πΊ Russcha'),
        ],
        [
            $telegram->buildKeyboardButton('π¬π§ Ingilizcha'),
        ]
        //[
        //    $telegram->buildInlineKeyboardButton('Russ'),
        //    $telegram->buildInlineKeyboardButton('English')
        //]
    ];

    $keyb = $telegram->buildKeyBoard($option,false,true);

    $content = ['chat_id' => $chatId, 'reply_markup' => $keyb, 'text' => 'tilni tanlang'];
} else {
    $content = ['chat_id' => $chatId, 'text' => 'Assalomu alaykum , sizni id : ' . $chatId];
}

$telegram->sendMessage($content);
