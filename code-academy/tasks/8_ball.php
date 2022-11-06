<?php
/**
 * Magic 8 Ball IRC bot
 * Created by Lance Brignoni
 * Converted to PHP by Arnold Daniels
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

// Following function asks user question, then returns random results from responses
function answerQuery()
{
    $responses = ["Not so sure", "42", "Most likely", "Absolutely not", "Outlook is good",
        "I see good things happening", "Never", "Negative", "Could be", "Unclear, ask again",
        "Yes", "No", "Possible, but not probable"];

    echo "Ask and you shall receive: ";
    $question = fgets(STDIN);

    echo "Let me dig deep into the waters of life, and find your answer\n";
    sleep(2);

    echo "Hmmm\n";
    sleep(2);

    $picked = array_rand($responses);
    echo $responses[$picked], "\n";
}

do {
    answerQuery();

    // Following asks user if they would like to play again, and loops until user is finished
    echo "Would you like to ask the Wise One another question? Y/N: ";
    $secondQuestion = fgetc(STDIN);
    echo "\n";

} while (strtoupper($secondQuestion) === "Y");