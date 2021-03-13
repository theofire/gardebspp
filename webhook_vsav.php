<?php
//=======================================================================================================
// Compose message. You can use Markdown
// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
//========================================================================================================

$json_data = json_encode([
    // Message
    "content" => "",
    # @roleID via \@ROLENAME puis <@&349560804355473439> dans le "content"

    // Username
    "username" => "Affectation du jours",
    // Avatar of user
    "avatar_url" => "https://gtswiki.gt-beginners.net/decal/png/28/03/53/7061714600098530328_1.png",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => $affection_text,

            // Embed Type
            "type" => "rich",

            // Embed Description
            "description" => "",

            // URL of title link
            "url" => "https://www.samu-rp.com",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "d62209" ),

            /*"thumbnail" => [
                "url" => "https://www.samu-rp.com/ressources/images/public/photoSRC/logo_tel.png"
            ],*/

            // Footer
            "footer" => [
                "text" => "Si vous n'êtes pas en ville, venez nous rejoindre !",
                "icon_url" => "https://gtswiki.gt-beginners.net/decal/png/28/03/53/7061714600098530328_1.png"
            ],

            // Image to send
            /*"image" => [
                "url" => "https://www.samu-rp.com/ressources/images/public/photoSRC/background_orsec_novi.png"
            ],*/

            // Thumbnail
            //"thumbnail" => [
            //    "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=400"
            //],

            // Author
            "author" => [
                "name" => $text_heure,
                #"url" => "https://www.samu-rp.com",
                "icon_url" => "https://gtswiki.gt-beginners.net/decal/png/28/03/53/7061714600098530328_1.png"
            ],

            // Additional Fields array
            "fields" => [
                // Field 1
                [
                    "name" => "Conducteur",
                    "value" => $conducteur,
                    "inline" => true
                ],
                // Field 2
                [
                    "name" => "Chef d'agrès",
                    "value" => $chefagres,
                    "inline" => true
                ],
                [
                    "name" => "Equipier",
                    "value" => $equipier,
                    "inline" => true
                ]
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
echo $response;
curl_close( $ch );
