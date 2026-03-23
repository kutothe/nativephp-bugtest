

<div class="mb-4 flex">
    <div class="flex">
        <div id="open-now-text" class="items-center inline-block align-middle transition-colors text-gray-400 mt-1 mr-2">Open Now</div>

        <div class="form-toggle">
            <input id="open-now-toggle" type="checkbox" class="peer" onchange="openNowChanged(this);" />
            <label for="open-now-toggle"></label>
        </div>
    </div>
    <div class="flex-auto relative text-right">
        <div id="dietary-select" class="form-element form-select px-5 backdrop-blur bg-none bg-form-element-bg/60 dark:bg-form-element-bg-dark/60 transition-all duration-250 ease-in-out" onclick="dietarySelectClicked();">
            <span class="inline-block">Dietary Preferences</span>
            <svg class="-mt-1 w-4 h-4 inline-block dark:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M303.5 473C312.9 482.4 328.1 482.4 337.4 473L537.4 273C546.8 263.6 546.8 248.4 537.4 239.1C528 229.8 512.8 229.7 503.5 239.1L320.5 422.1L137.5 239.1C128.1 229.7 112.9 229.7 103.6 239.1C94.3 248.5 94.2 263.7 103.6 273L303.6 473z"/></svg>
        </div>
                <div id="dietary-options-con" class="form-element absolute p-0 right-0 top-[100%] z-1 transition-height duration-250 ease-in-out overflow-hidden text-left bg-form-element-bg/60 dark:bg-form-element-bg-dark/60 backdrop-blur border-t-0 border-b-0 rounded-t-none">
            <div class="p-3 pt-5">
                                    <div class="mb-2">
                        <label for="dietary-Allergen-Friendly">
                            <input id="dietary-Allergen-Friendly" class="form-checkbox mr-1" type="checkbox" name="dietaryValues[]" value="allergen-friendly" />
                            <span class="inline-block items-center align-top">Allergen-Friendly</span>
                        </label>
                    </div>
                                    <div class="mb-2">
                        <label for="dietary-Kosher">
                            <input id="dietary-Kosher" class="form-checkbox mr-1" type="checkbox" name="dietaryValues[]" value="kosher" />
                            <span class="inline-block items-center align-top">Kosher</span>
                        </label>
                    </div>
                                    <div class="mb-2">
                        <label for="dietary-Vegeterian">
                            <input id="dietary-Vegeterian" class="form-checkbox mr-1" type="checkbox" name="dietaryValues[]" value="vegeterian" />
                            <span class="inline-block items-center align-top">Vegeterian</span>
                        </label>
                    </div>
                                    <div class="mb-2">
                        <label for="dietary-Vegan">
                            <input id="dietary-Vegan" class="form-checkbox mr-1" type="checkbox" name="dietaryValues[]" value="vegan" />
                            <span class="inline-block items-center align-top">Vegan</span>
                        </label>
                    </div>
                                <button id="dietarySubmit" class="form-apply mt-2 bg-gray-200" onclick="filterLocations(); dietarySelectClicked();">Apply</button>
            </div>
        </div>
    </div>
</div>


    <div class="accordion-item content-item dining-location" data-id="30" data-open="1" data-dietary-tags="vegan,vegeterian">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/30.webp?1" class="block dark:invert" width="170" alt="Artesano Bakery &amp; Cafe logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Artesano Bakery &amp; Cafe
                </div>
                <div data-content-id="dining-location-content-30">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 5:30 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-30" class="flex-none accordion-content block">
                            <a class="mt-2" href="http://rit.test/dining/menu/30/0/Artesano%20Bakery%20&amp;%20Cafe">
                    <img class="w-5 h-5 inline-block -mt-1" src="http://rit.test/img/icons/menu.svg" alt="menu icon">
                    <span class="content-link">View Menu</span>
                </a>
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">7:30am - 5:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">7:30am - 5:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">7:30am - 5:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">7:30am - 5:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">7:30am - 5:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">8:00am - 3:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in Monroe Hall, Artesano Bakery & Cafe is the on-campus patisserie offering a wide selection of delicacies, including breakfast sandwiches, pastries, cookies, and cupcakes with a variety of gluten-free and vegan options. Artesano serves blended frozen drinks, espressos, lattes and cappuccinos from Peet's Coffee.
<br /><br />
This location is cashless on weekends and after 5 p.m. on weekdays. Customers using cash may use a Tiger Spend Reload Station to add funds to an existing RIT ID card or a Reload Card.

            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="31" data-open="1" data-dietary-tags="vegan,vegeterian">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/31.webp?1" class="block dark:invert" width="170" alt="Beanz logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Beanz
                </div>
                <div data-content-id="dining-location-content-31">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 10 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-31" class="flex-none accordion-content block">
                            <a class="mt-2" href="http://rit.test/dining/menu/31/0/Beanz">
                    <img class="w-5 h-5 inline-block -mt-1" src="http://rit.test/img/icons/menu.svg" alt="menu icon">
                    <span class="content-link">View Menu</span>
                </a>
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">7:30am - 10:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">7:30am - 10:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">7:30am - 10:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">7:30am - 10:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">7:30am - 10:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">9:00am - 10:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">9:00am - 10:00pm<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in Grace Watson Hall, Beanz serves Finger Lakes Coffee Roasters coffee, espresso drinks, and seasonal specialty drinks. Beanz offers a wide selection of freshly baked goods, desserts, salads, and sandwiches. Ultimate Smoothie Blendz creates smoothies with real fruits, vegetables, and cold-pressed juices from a local orchard, Red Jacket Orchards.

This location is cashless. Customers using cash may use a Tiger Spend Reload Station to add funds to an existing RIT ID card or a Reload Card.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="32" data-open="1" data-dietary-tags="vegan,vegeterian">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/32.webp?1" class="block dark:invert" width="170" alt="Ben and Jerry&#039;s logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Ben and Jerry&#039;s
                </div>
                <div data-content-id="dining-location-content-32">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 7 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-32" class="flex-none accordion-content block">
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">12:00pm - 7:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">12:00pm - 7:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">12:00pm - 7:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">12:00pm - 7:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">12:00pm - 7:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">11:00am - 5:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in the Student Alumni Union, Ben & Jerry's offers over 30 flavors of Vermont's best ice cream. Here you will find a place where friends hang out and good vibes flow over euphoric ice cream flavors chock-full of chunks and swirls. A variety of dairy and non-dairy ice cream, shakes, sundaes, smoothies, cookies, and cakes are available.
<br /><br />
This location is cashless. Customers using cash may use a Tiger Spend Reload Station to add funds to an existing RIT ID card or a Reload Card.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="22" data-open="1" data-dietary-tags="vegan,vegeterian">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/22.webp?1" class="block dark:invert" width="170" alt="Brick City Cafe logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Brick City Cafe
                </div>
                <div data-content-id="dining-location-content-22">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 2 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-22" class="flex-none accordion-content block">
                            <a class="mt-2" href="http://rit.test/dining/menu/22/0/Brick%20City%20Cafe">
                    <img class="w-5 h-5 inline-block -mt-1" src="http://rit.test/img/icons/menu.svg" alt="menu icon">
                    <span class="content-link">View Menu</span>
                </a>
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">11:00am - 2:00pm<br/>7:00am - 10:30am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">11:00am - 2:00pm<br/>7:00am - 10:30am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">11:00am - 2:00pm<br/>7:00am - 10:30am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">11:00am - 2:00pm<br/>7:00am - 10:30am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">11:00am - 2:00pm<br/>7:00am - 10:30am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">11:00am - 4:00pm<br/>8:30am - 10:30am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in the Student Alumni Union, Brick City Cafe features a wide variety of breakfast, lunch, and daily specials. They offer breakfast sandwiches, a breakfast grill, full deli with subs and wraps, daily entree specials, and daily vegetarian entree specials. Also available are grab-and-go items as well as bottled beverages and Finger Lakes Roasters coffee.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="481" data-open="1" data-dietary-tags="">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/481.webp?1" class="block dark:invert" width="170" alt="Bytes Micro Market logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Bytes Micro Market
                </div>
                <div data-content-id="dining-location-content-481">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-481" class="flex-none accordion-content block">
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">12:00am - 12:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">12:00am - 12:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">12:00am - 12:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">12:00am - 12:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">12:00am - 12:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">12:00am - 12:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">12:00am - 12:00am<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                24-hour self-service and self-checkout retail venues that offer a variety of food options, including beverages, signature sandwiches, salads, snacks, and microwavable entrees.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="23" data-open="1" data-dietary-tags="vegan,vegeterian">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/23.webp?1" class="block dark:invert" width="170" alt="The Cafe &amp; Market at Crossroads logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    The Cafe &amp; Market at Crossroads
                </div>
                <div data-content-id="dining-location-content-23">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 9 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-23" class="flex-none accordion-content block">
                            <a class="mt-2" href="http://rit.test/dining/menu/23/0/The%20Cafe%20&amp;%20Market%20at%20Crossroads">
                    <img class="w-5 h-5 inline-block -mt-1" src="http://rit.test/img/icons/menu.svg" alt="menu icon">
                    <span class="content-link">View Menu</span>
                </a>
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">10:30am - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">10:30am - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">10:30am - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">10:30am - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">10:30am - 6:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">10:30am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">12:00pm - 8:00pm<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in the Crossroads building in Global Village, the Cafe and Market at Crossroads features a food court and convenience store. Inside of Crossroads are eight different food stations: grill, salad bar, pasta toss, pizza, Asian cuisine, deli, chef specials, and visiting chefs. <br /><br />
This location is cashless everyday after 7 p.m. Customers using cash may use a Tiger Spend Reload Station to add funds to an existing RIT ID card or a Reload Card.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="35" data-open="1" data-dietary-tags="vegeterian">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/35.webp?1" class="block dark:invert" width="170" alt="The College Grind logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    The College Grind
                </div>
                <div data-content-id="dining-location-content-35">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 2 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-35" class="flex-none accordion-content block">
                            <a class="mt-2" href="http://rit.test/dining/menu/35/0/The%20College%20Grind">
                    <img class="w-5 h-5 inline-block -mt-1" src="http://rit.test/img/icons/menu.svg" alt="menu icon">
                    <span class="content-link">View Menu</span>
                </a>
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">8:00am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">8:00am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">8:00am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">8:00am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">8:00am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in the Center for Student Development (CSD), The College Grind offers a variety of hot and cold Starbucks drinks, baked goods, breakfast sandwiches, and desserts. Ultimate Smoothie Blendz (USB) creates smoothies with real fruits, vegetables, and cold-pressed juices from a local orchard, Red Jacket Orchards.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="24" data-open="0" data-dietary-tags="vegan,vegeterian">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/24.webp?1" class="block dark:invert" width="170" alt="The Commons logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    The Commons
                </div>
                <div data-content-id="dining-location-content-24">
                    <div class="text-base">
                                                    <span class="text-dining-closed dark:text-dining-closed-dark">Closed</span>
                                                            &#8226; opens 2 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-24" class="flex-none accordion-content block">
                            <a class="mt-2" href="http://rit.test/dining/menu/24/0/The%20Commons">
                    <img class="w-5 h-5 inline-block -mt-1" src="http://rit.test/img/icons/menu.svg" alt="menu icon">
                    <span class="content-link">View Menu</span>
                </a>
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">2:00pm - 11:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">2:00pm - 11:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">2:00pm - 11:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">2:00pm - 11:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">2:00pm - 11:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">2:00pm - 10:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">2:00pm - 10:00pm<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located on the second floor of the Center for Student Development (CSD), The Commons offers a wide menu selection with one of the best views on campus. Features include lunch and dinner entrees, the Shumway sub and salad station, Hettie's Grill, stone oven pizza, pasta cucina, soups, and made-to-order salads.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="27" data-open="1" data-dietary-tags="">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/27.webp?1" class="block dark:invert" width="170" alt="Corner Store logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Corner Store
                </div>
                <div data-content-id="dining-location-content-27">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 12 AM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-27" class="flex-none accordion-content block">
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">8:30am - 12:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">8:30am - 12:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">8:30am - 12:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">8:30am - 12:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">8:30am - 12:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">10:00am - 12:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">10:00am - 12:00am<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in Fredericka Douglass Sprague Perry Hall, The Corner Store is the on-campus grocery store. Pick up snacks or all the ingredients to prepare a meal. The Corner Store is filled with fresh produce, sandwiches, ice cream, microwavable entrees, dairy products, snacks, and beverages. The Corner Store is open late everyday.
<br /><br />
This location is cashless from 10:00 a.m. - 12:00 p.m. Saturday and Sunday. Cash cannot be accepted during these times. Purchases can be made with Meal Exchanges, Tiger Bucks, Dining Dollars, or Visa/Mastercard/Discover.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="34" data-open="1" data-dietary-tags="vegeterian">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/34.webp?1" class="block dark:invert" width="170" alt="CTRL ALT DELi logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    CTRL ALT DELi
                </div>
                <div data-content-id="dining-location-content-34">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 5 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-34" class="flex-none accordion-content block">
                            <a class="mt-2" href="http://rit.test/dining/menu/34/0/CTRL%20ALT%20DELi">
                    <img class="w-5 h-5 inline-block -mt-1" src="http://rit.test/img/icons/menu.svg" alt="menu icon">
                    <span class="content-link">View Menu</span>
                </a>
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">7:30am - 5:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">7:30am - 5:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">7:30am - 5:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">7:30am - 5:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">7:30am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in the atrium of B. Thomas Golisano College of Computing Science, Ctrl Alt Deli offers a variety of signature breakfast sandwiches, subs, sandwiches, and wraps. They also offer several grab-and-go options such as bagels, baked goods, pastries, fresh fruit, and salads.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="41" data-open="0" data-dietary-tags="">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img class="w-16 h-16 inline-block dark:text-white fill-gray-800 dark:fill-gray-200" src="http://rit.test/img/icons/dining-rounded.svg" alt="rounded dining icon">
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Dining Office
                </div>
                <div data-content-id="dining-location-content-41">
                    <div class="text-base">
                                                    <span class="text-dining-closed dark:text-dining-closed-dark">Closed</span>
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-41" class="flex-none accordion-content block">
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">Closed</td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                RIT Dining, a department of Auxiliary Services, is committed to delivering legendary service with a customer-centric focus, superior food quality, and food safety. We pride ourselves on a wide variety of great-tasting, freshly prepared foods daily and ensuring the RIT community and visitors have an innovative and engaging dining experience at all of our operations on
campus.
<br /><br />
For dining questions and support, please visit help.rit.edu.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="25" data-open="1" data-dietary-tags="vegan,vegeterian">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/25.webp?1" class="block dark:invert" width="170" alt="Global Village Cantina &amp; Grille logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Global Village Cantina &amp; Grille
                </div>
                <div data-content-id="dining-location-content-25">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 9 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-25" class="flex-none accordion-content block">
                            <a class="mt-2" href="http://rit.test/dining/menu/25/0/Global%20Village%20Cantina%20&amp;%20Grille">
                    <img class="w-5 h-5 inline-block -mt-1" src="http://rit.test/img/icons/menu.svg" alt="menu icon">
                    <span class="content-link">View Menu</span>
                </a>
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">10:30am - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">10:30am - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">10:30am - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">10:30am - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">10:30am - 8:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">11:00am - 8:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in Global Village, the Cantina & Grille offers made-to-order Mexican cuisine at Salsarita's. Find tacos, burritos, quesadillas, Mexican pizzas, nachos, and salads with fresh ingredients and a variety of salads and sides.
<br /><br />This location is cashless on weekends and after 5 p.m. on weekdays. Customers using cash may use a Tiger Spend Reload Station to add funds to an existing RIT ID card or a Reload Card.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="61" data-open="0" data-dietary-tags="">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img class="w-16 h-16 inline-block dark:text-white fill-gray-800 dark:fill-gray-200" src="http://rit.test/img/icons/dining-rounded.svg" alt="rounded dining icon">
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    GPC Club Lounge
                </div>
                <div data-content-id="dining-location-content-61">
                    <div class="text-base">
                                                    <span class="text-dining-closed dark:text-dining-closed-dark">Closed</span>
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-61" class="flex-none accordion-content block">
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">Closed</td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Brick City Catering are the exclusive caterers of both the Club Lounge and the luxury suites. A custom a la carte menu is available for guests enjoying the luxury suites. The Club Lounge features a rotating buffet-style menu for fans to enjoy. 
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="21" data-open="1" data-dietary-tags="allergen-friendly,vegan,vegeterian">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/21.webp?1" class="block dark:invert" width="170" alt="Gracie&#039;s logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Gracie&#039;s
                </div>
                <div data-content-id="dining-location-content-21">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 2 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-21" class="flex-none accordion-content block">
                            <a class="mt-2" href="http://rit.test/dining/menu/21/0/Gracie%27s">
                    <img class="w-5 h-5 inline-block -mt-1" src="http://rit.test/img/icons/menu.svg" alt="menu icon">
                    <span class="content-link">View Menu</span>
                </a>
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">7:30am - 2:00pm<br/>4:00pm - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">7:30am - 2:00pm<br/>4:00pm - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">7:30am - 2:00pm<br/>4:00pm - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">7:30am - 2:00pm<br/>4:00pm - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">7:30am - 2:00pm<br/>4:00pm - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">10:00am - 2:00pm<br/>4:00pm - 9:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">10:00am - 2:00pm<br/>4:00pm - 9:00pm<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in Grace Watson Hall, Gracie's is a peanut and tree nut free (except coconut) facility that offers daily entree specials, made to order pizza, pasta, and grill options. Vegan and vegetarian entrees are offered daily, as well as pre-packaged grab and go items and visiting chefs. Pre-packaged and grab and go items include salad, hand fruit, dessert, and more. One station in Gracie's focuses on eliminating 7 major allergens: milk, eggs, fish, crustacean shellfish, tree nuts (except coconut), peanuts and wheat. The station also eliminates sesame seed.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="37" data-open="1" data-dietary-tags="">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/37.webp?1" class="block dark:invert" width="170" alt="Java Wally&#039;s logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Java Wally&#039;s
                </div>
                <div data-content-id="dining-location-content-37">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 7 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-37" class="flex-none accordion-content block">
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">7:30am - 7:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">7:30am - 7:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">7:30am - 7:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">7:30am - 7:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">7:30am - 7:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">9:00am - 3:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                In partnership with Java's on Gibbs Street in downtown Rochester, the library invites you in to enjoy fresh gourmet coffee (made with Java Joe's beans), tea, smoothies, lemonade and light snacks while relaxing in a casual, comfortable atmosphere.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="441" data-open="1" data-dietary-tags="kosher">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/441.webp?1" class="block dark:invert" width="170" alt="Loaded Latke logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Loaded Latke
                </div>
                <div data-content-id="dining-location-content-441">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 2 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-441" class="flex-none accordion-content block">
                            <a class="mt-2" href="http://rit.test/dining/menu/441/0/Loaded%20Latke">
                    <img class="w-5 h-5 inline-block -mt-1" src="http://rit.test/img/icons/menu.svg" alt="menu icon">
                    <span class="content-link">View Menu</span>
                </a>
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">11:00am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">11:00am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">11:00am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">11:00am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                New dining location
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="29" data-open="1" data-dietary-tags="">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/29.webp?1" class="block dark:invert" width="170" alt="The Market at Global Village logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    The Market at Global Village
                </div>
                <div data-content-id="dining-location-content-29">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 10 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-29" class="flex-none accordion-content block">
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">8:00am - 10:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">8:00am - 10:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">8:00am - 10:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">8:00am - 10:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">8:00am - 8:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">10:00am - 8:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">10:00am - 8:00pm<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in Global Village, The Market at Global Village is the on-campus destination to purchase food and beverages from around the world including sushi from Hissho Sushi. Hissho Sushi serves grab and go sushi rolls, nigiri, and salads.
<br /><br />
This location is cashless on weekends and after 5 p.m. on weekdays. Customers using cash may use a Tiger Spend Reload Station to add funds to an existing RIT ID card or a Reload Card.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="38" data-open="1" data-dietary-tags="vegan,vegeterian">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/38.webp?1" class="block dark:invert" width="170" alt="Midnight Oil logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Midnight Oil
                </div>
                <div data-content-id="dining-location-content-38">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 11 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-38" class="flex-none accordion-content block">
                            <a class="mt-2" href="http://rit.test/dining/menu/38/0/Midnight%20Oil">
                    <img class="w-5 h-5 inline-block -mt-1" src="http://rit.test/img/icons/menu.svg" alt="menu icon">
                    <span class="content-link">View Menu</span>
                </a>
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">7:30am - 11:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">7:30am - 11:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">7:30am - 11:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">7:30am - 11:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">7:30am - 11:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">10:00am - 10:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">10:00am - 10:00pm<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in the Crossroads building in Global Village, Midnight Oil is a convenient destination to relax, converse, and experience music and art. Midnight Oil serves Starbucks, hot and iced drinks, specialty beverages including teas, and chai. Enjoy artisan sandwiches, desserts, and pastries.
<br /><br />
This location is cashless. Customers using cash may use a Tiger Spend Reload Station to add funds to an existing RIT ID card or a Reload Card.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="36" data-open="1" data-dietary-tags="">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/36.webp?1" class="block dark:invert" width="170" alt="Nathan&#039;s Soup &amp; Salad logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Nathan&#039;s Soup &amp; Salad
                </div>
                <div data-content-id="dining-location-content-36">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 7:30 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-36" class="flex-none accordion-content block">
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">10:00am - 7:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">10:00am - 7:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">10:00am - 7:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">10:00am - 7:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">10:00am - 5:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">11:00am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in the Student Alumni Union, Nathan's Soup and Salad is a local Rochester favorite since 1980. Nathan's offers a variety of healthy home-style soups, sandwiches, and fresh-baked breads.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="461" data-open="1" data-dietary-tags="">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/461.webp?1" class="block dark:invert" width="170" alt="Petals at RIT Inn logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Petals at RIT Inn
                </div>
                <div data-content-id="dining-location-content-461">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 2 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-461" class="flex-none accordion-content block">
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">11:30am - 2:00pm<br/>Closed<br/>4:30pm - 10:30pm<br/>6:30am - 10:30am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">11:30am - 2:00pm<br/>Closed<br/>4:30pm - 10:30pm<br/>6:30am - 10:30am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">11:30am - 2:00pm<br/>Closed<br/>4:30pm - 10:30pm<br/>6:30am - 10:30am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">11:30am - 2:00pm<br/>Closed<br/>4:30pm - 10:30pm<br/>6:30am - 10:30am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">11:30am - 2:00pm<br/>Closed<br/>4:30pm - 10:30pm<br/>6:30am - 10:30am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">Closed<br/>11:00am - 4:30pm<br/>4:30pm - 10:30pm<br/>7:00am - 11:00am<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/>11:00am - 4:30pm<br/>4:30pm - 10:30pm<br/>7:00am - 11:00am<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located at the RIT Inn & Conference Center, Petals is a restaurant that is open for breakfast, lunch, and dinner. Petals serve a variety of American fare, with customizable entrees and daily specials.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="501" data-open="0" data-dietary-tags="">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img class="w-16 h-16 inline-block dark:text-white fill-gray-800 dark:fill-gray-200" src="http://rit.test/img/icons/dining-rounded.svg" alt="rounded dining icon">
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    RIT Food Truck
                </div>
                <div data-content-id="dining-location-content-501">
                    <div class="text-base">
                                                    <span class="text-dining-closed dark:text-dining-closed-dark">Closed</span>
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-501" class="flex-none accordion-content block">
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">Closed</td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                RIT Food Truck
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="26" data-open="1" data-dietary-tags="vegan,vegeterian">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img src="http://rit.test/img/dining-logos/26.webp?1" class="block dark:invert" width="170" alt="RITZ Sports Zone logo" />
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    RITZ Sports Zone
                </div>
                <div data-content-id="dining-location-content-26">
                    <div class="text-base">
                                                    <span class="text-dining-open">Open</span>
                                                            &#8226; closes 8:30 PM
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-26" class="flex-none accordion-content block">
                            <a class="mt-2" href="http://rit.test/dining/menu/26/0/RITZ%20Sports%20Zone">
                    <img class="w-5 h-5 inline-block -mt-1" src="http://rit.test/img/icons/menu.svg" alt="menu icon">
                    <span class="content-link">View Menu</span>
                </a>
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">11:00am - 8:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">11:00am - 8:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">11:00am - 8:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">11:00am - 8:30pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">11:00am - 8:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">11:00am - 2:00pm<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in the Student Alumni Union, RITz Sports Zone is a favorite spot to socialize and watch sports. Lunch and dinner offerings include salads, pasta bake, pizza, panini, calzones, grill, deli, and grab-and-go items.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="28" data-open="0" data-dietary-tags="">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img class="w-16 h-16 inline-block dark:text-white fill-gray-800 dark:fill-gray-200" src="http://rit.test/img/icons/dining-rounded.svg" alt="rounded dining icon">
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    Sol&#039;s Underground
                </div>
                <div data-content-id="dining-location-content-28">
                    <div class="text-base">
                                                    <span class="text-dining-closed dark:text-dining-closed-dark">Closed</span>
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-28" class="flex-none accordion-content block">
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">Closed</td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Located in Sol Heumann Hall, Sol's Underground is the one-stop-shop for a quick bite to eat. Sol's prepares flat bread pizzas, quesadillas, paninis, wraps, offers ice cream.

            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
    <div class="accordion-item content-item dining-location" data-id="39" data-open="0" data-dietary-tags="">
        <div class="flex accordion-header">
            <div class="flex items-center mr-5">
                <div class="min-w-24 max-w-24 text-center">
                                            <img class="w-16 h-16 inline-block dark:text-white fill-gray-800 dark:fill-gray-200" src="http://rit.test/img/icons/dining-rounded.svg" alt="rounded dining icon">
                                    </div>
            </div>
            <div class="flex-auto">
                <div class="font-bold text-xl leading-6 mb-1">
                    USB Ultimate Smoothie Blendz
                </div>
                <div data-content-id="dining-location-content-39">
                    <div class="text-base">
                                                    <span class="text-dining-closed dark:text-dining-closed-dark">Closed</span>
                                                                            <img class="accordion-chevron w-4 h-4 inline-block ml-1 -mt-1 fill-current" src="http://rit.test/img/icons/chevron-down.svg" alt="chevron down icon">
                    </div>
                </div>
            </div>
        </div>
        <div id="dining-location-content-39" class="flex-none accordion-content block">
                        
                                            <table class="my-4">
                    <tbody>
                                                                                <tr class="text-md font-bold">
                                <td class="pr-7 pb-2 align-top">Monday</td>
                                <td class="pr-7 pb-2">Closed</td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Tuesday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Wednesday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Thursday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Friday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Saturday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                                                                <tr class="text-md ">
                                <td class="pr-7 pb-2 align-top">Sunday</td>
                                <td class="pr-7 pb-2">Closed<br/></td>
                            </tr>
                                            </tbody>
                </table>
            
            <hr class="divider"/>

            <div class="mb-5">
                Delight your taste buds with a refreshing smoothie from Ultimate Smoothie Blendz. Our handcrafted smoothies offer a refreshing bled of 100% real fruits, vegetables and local juices guaranteed to energize! USB uses cold-pressed juices from local orchard, Red Jacket. These juices are all naturel, unfiltered and have no added sugar or water. Along with the cold pressed juices, our smoothies use Red Jack Stomp's, which are unfiltered and cold pressed black currant, and blueberry and tart cherry nectar.
 
You can get your USB smoothie fix from multiple places on campus! Grab one at Catalyst at Institute Hall, Crossroads, Beanz or The College Grind.
            </div>
            <div class="text-gray-500 dark:text-gray-300 mb-4">
                IMPORTANT: Some locations' descriptions may refer to them as being cashless during certain hours. This is outdated information, as all RIT Dining locations are now cashless 24/7.
            </div>
        </div>
	</div>
