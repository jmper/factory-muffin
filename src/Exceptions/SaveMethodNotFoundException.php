<?php

/*
 * This file is part of Factory Muffin.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace League\FactoryMuffin\Exceptions;

/**
 * This is the save method not found exception class.
 *
 * This is thrown when the save method of a model does not exist. This class
 * extends MethodNotFoundException and ModelException, so you may want to try
 * to catch one of those exceptions instead, if you want to be more general.
 *
 * @author  Scott Robertson <scottymeuk@gmail.com>
 * @author  Graham Campbell <graham@mineuk.com>
 * @license <https://github.com/thephpleague/factory-muffin/blob/master/LICENSE> MIT
 */
class SaveMethodNotFoundException extends MethodNotFoundException
{
    /**
     * Create a new instance.
     *
     * @param string      $class   The model class name.
     * @param string      $method  The method name.
     * @param string|null $message The exception message.
     *
     * @return void
     */
    public function __construct($class, $method, $message = null)
    {
        if (!$message) {
            $message = "The save method '$method' was not found on the model: '$class'.";
        }

        parent::__construct($class, $method, $message);
    }
}
