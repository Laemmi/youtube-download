<?php
/**
 * Copyright (c) 2014 Michael Lämmlein <ml@spacerabbit.de>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @category    Laemmi
 * @package     Laemmi\YoutubeDownload
 * @subpackage  Http_Client
 * @author      Michael Lämmlein <ml@spacerabbit.de>
 * @copyright   2014 Michael Lämmlein <ml@spacerabbit.de>
 * @license     http://www.opensource.org/licenses/mit-license.php MIT-License
 * @version     0.0.1
 * @link        https://github.com/laemmi/youtube-download
 * @since       20.11.2014
 */

namespace Laemmi\YoutubeDownload\Http\Client;

/**
 * Interface
 *
 * @category    Laemmi
 * @package     Laemmi\YoutubeDownload
 * @subpackage  Http
 * @author      Michael Lämmlein <ml@spacerabbit.de>
 * @copyright   2014 Michael Lämmlein <ml@spacerabbit.de>
 * @license     http://www.opensource.org/licenses/mit-license.php MIT-License
 * @version     0.0.1
 * @link        https://github.com/laemmi/youtube-download
 * @since       20.11.2014
 */
interface ClientInterface
{
    public function __construct(Options $options);

    public function saveFile(string $url, $local);

    public function getContent(string $url, array $options = []);

    public function getHeaderContentLength(string $url);
}
