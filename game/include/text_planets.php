<?php
/*    
	This file is part of STFC.
	Copyright 2006-2007 by Michael Krauss (info@stfc2.de) and Tobias Gafner
		
	STFC is based on STGC,
	Copyright 2003-2007 by Florian Brede (florian_brede@hotmail.com) and Philipp Schmidt
	
    STFC is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.

    STFC is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


/*
 * 0 => Bezeichnung des Planeten
 * 1 => menschliches Leben
 * 2 => Rohstoffvorkommen
 * 3 => Beschreibung
 * 4 => Beispiele
 */
 
$PLANETS_TEXT = array(
    'a' => array(
        0 => 'Gas-Supergigant',
        1 => 'unm�glich',
        2 => 'hohe Vorkommen metallischer Elemente, kaum Mineralien',
        3 => 'Planeten dieser Klasse sind sehr gro�, meistens eine 300 bis 1000fache Masse der Erde, und liegen in der kalten Zone ihrer Sonne (hohe Entfernung). Durch die geringe Sonneneinstrahlung und hohe Gravitation bilden sie dichte Atmosph�ren aus Wasserstoff. Die hohen Kerntemperaturen verursachen eine W�rmeabstrahlung und eine hohe Oberfl�chentemperatur. Leben ist nur auf orbitalen Stationen m�glich.',
        4 => 'Jupiter'
    ),
    
    'b' => array(
        0 => 'Gas-Giganten',
        1 => 'unm�glich',
        2 => 'hohe Vorkommen metallischer Elemente, kaum Mineralien',
        3 => 'Planeten dieser Klasse sind sehr gro�, meistens eine 10 bis 100fache Masse der Erde, und liegen in der kalten Zone ihrer Sonne (hohe Entfernung). Durch die geringe Sonneneinstrahlung und hohe Gravitation bilden sie dichte Atmosph�ren aus Wasserstoff. Die hohen Kerntemperaturen verursachen eine W�rmeabstrahlung und eine hohe Oberfl�chentemperatur. Leben ist nur auf orbitalen Stationen m�glich.',
        4 => 'Saturn, Neptun'
    ),
    
    'c' => array(
        0 => 'Klasse-C-Welt',
        1 => 'aufw�ndig, aber m�glich',
        2 => 'mittlere Vorkommen aller wichtigen Rohstoffen',
        3 => 'Planeten dieser Klasse �hneln in Masse und Entfernung zur Sonne der Erde, ihre Atmosph�re und Oberfl�che ist jedoch durch starke Treibhauseffekte aufgeheizt, so dass Wasser z.B. nur im gasf�rmigen Zustand vorhanden ist. Mit technischer Unterst�tzung und Versorgung von au�en ist Leben m�glich',
        4 => 'Venus'
    ),
    
    'd' => array(
        0 => 'Klasse-D-Welt',
        1 => 'aufw�ndig, aber m�glich',
        2 => 'mittlere Vorkommen aller wichtigen Rohstoffe',
        3 => 'Planeten dieser Klasse gelten meist nur als Planetoiden, da sie je nach Gr��e keine regelm��ige Form besitzen, weil ihre Gravitation nicht ausreicht, um eine Kugel zu bilden. Ihre Atmosph�re ist, wenn vorhanden, sehr d�nn. Die Oberfl�che besteht aus Silikaten und verschiedenen Metallverbindungen. Mit technischer Unterst�tzung und Versorgung von au�en ist Leben m�glich.',
        4 => 'Ceres (Asteroid im Sol-System)'
    ),
    
    'e' => array(
        0 => 'Klasse-E-Welt',
        1 => 'mit technischer Hilfe m�glich',
        2 => 'mittlere Vorkommen aller wichtigen Rohstoffe',
        3 => 'Planeten dieser Klasse �hneln in Masse und Entfernung zur Sonne der Erde und werden als Vorl�ufer der verschiedenen Klassen nach F gesehen. Ihr Kern ist noch geschmolzen, sie besitzen jedoch bereits eine d�nne Atmosph�re mit Sauerstoff-Bestandteilen. Mit technischer Unterst�tzung und Versorgung von au�en ist Leben m�glich.',
        4 => '-'
    ),
    
    'f' => array(
        0 => 'Klasse-F-Welt',
        1 => 'mit technischer Hilfe m�glich',
        2 => 'mittlere Vorkommen aller wichtigen Rohstoffe',
        3 => 'Planeten dieser Klasse �hneln in Masse und Entfernung zur Sonne der Erde. Ihre Atmosph�re ist bereits sehr sauerstoffreich, doch durch ihr geringes Alter (ca. 1 Mrd. Jahre) ist ihre Oberfl�che oft noch nicht vollkommen erstarrt. Mit geringer technischer Unterst�tzung ist Leben m�glich.',
        4 => '-'
    ),
    
    'g' => array(
        0 => 'Klasse-G-Welt',
        1 => 'mit technischer Hilfe m�glich',
        2 => 'hohe Vorkommen metallischer Elemente',
        3 => 'Planeten dieser Klasse haben ungef�hr die Masse der Erde, befinden sich aber in der hei�esten Zone der Sonne (geringe Entfernung). Ihre Atmosph�re besteht aus schweren Gasen und gasf�rmigen Metallen, meistens existieren aber auch noch Sauerstoff-Verbindungen. Die starke Sonneneinstrahlung f�hrt zu einer hohen Oberfl�chentemperatur. Mit technischer Hilfe ist Leben m�glich',
        4 => 'Ceti Alpha V'
    ),
    
    'h' => array(
        0 => 'Klasse-H-Welt',
        1 => 'aufw�ndig, aber m�glich',
        2 => 'mittlere Vorkommen aller wichtigen Rohstoffe',
        3 => 'Planten dieser Klasse kommen auf ungef�hr 10% der Erdmasse und liegen in einer gro�en Entfernung zur Sonne (kalte Zone). Durch ihr geringes Alter ist die Oberfl�che noch geschmolzen oder ist immer noch geologisch sehr aktiv. Die Atmosph�re besteht vornehmlich aus Wasserstoff. Mit technischer Hilfe und Versorgung von au�en ist Leben m�glich.',
        4 => 'Gothos'
    ),
    
    'i' => array(
        0 => 'Klasse-I-Welt',
        1 => 'aufw�ndig, aber m�glich',
        2 => 'hohe Vorkommen mineralischer Elemente und Latinum, kaum Metalle',
        3 => 'Planeten dieser Klasse �hneln in Masse und Entfernung zur Sonne der Erde. Sie haben eine sehr aktive Oberfl�che voller Vulkane und ihre Atmosph�re ist stark toxisch. Mit technischer Hilfe und Versorgung von au�en ist Leben m�glich.',
        4 => '-'
    ),
    
    'j' => array(
        0 => 'Klasse-J-Welt',
        1 => 'aufw�ndig, aber m�glich',
        2 => 'enorme Vorkommen mineralischer Elemente, kaum Latinum und Metalle',
        3 => 'Planeten dieser Klasse kommen auf ungef�hr 10%-100% der Erdmasse. Ihre aus Edelgasen bestehende Atmosph�re ist d�nn und das gesamte Erscheinungsbild ist eher mondartig. Mit technischer Hilfe und Versorgung von au�en ist Leben m�glich.',
        4 => 'Luna (Erdmond)'
    ),
    
    'k' => array(
        0 => 'Klasse-K-Welt',
        1 => 'aufw�ndig, aber m�glich',
        2 => 'mittlere Vorkommen aller wichtigen Rohstoffe',
        3 => 'Planeten dieser Klasse kommen auf ungef�hr 10% der Erdmasse und liegen in derselben Zone wie die Erde. Sie haben eine feste Oberfl�che, doch durch ihre geringe Gr��e reicht die Gravitation nicht aus, um eine dichte Atmosph�re zu bilden und Wasser im fl�ssigen Zustand zu halten. Mit technischer Unterst�tzung und Versorgung von au�en ist Leben m�glich.',
        4 => 'Mars'
    ),
    
    'l' => array(
        0 => 'Eis-Planet',
        1 => 'mit technischer Hilfe m�glch',
        2 => 'enorme Vorkommen mineralischer Rohstoffe, kaum Metalle und Latinum',
        3 => 'Planeten dieser Klasse kommen auf ungef�hr 10% der Erdmasse und liegen in der kalten Zone. Durch die geringe Sonneneintrahlung und den festen, kalten Kern ist ihre Oberfl�che und die gesamte Atmosph�re permanent gefroren. Mit technischer Unterst�tzung und Versorgung von au�en ist Leben m�glich.',
        4 => '-'
    ),
        
    
    'm' => array(
        0 => 'Terranische Welt',
        1 => 'm�glich',
        2 => 'mittlere Vorkommen aller wichtigen Rohstoffe',
        3 => 'Planeten dieser Klasse �hneln in Masse und Entfernung zur Sonne der Erde. Ihre Atmosph�re ist reich an Sauerstoff-Molek�hlen (O2, O3) und die Oberfl�che ist reichhaltig mit Wasser bedeckt. Ideale Lebensbedigungen.',
        4 => 'Terra, Vulkan, Quo�nos, Romulus, Bajor, Cardassia, ...'
    ),
    
    'n' => array(
        0 => 'Wasser-Planet',
        1 => 'm�glich',
        2 => 'm��ige Vorkommen aller wichtigen Rohstoffe',
        3 => 'Planeten dieser Klasse �hneln in Masse und Entfernung zur Sonne der Erde. Ihre Atmosph�re ist gleich der eines Klasse-M-Planeten beschaffen, die Oberfl�che ist zu weit mehr als 90% mit Wasser bedeckt. Ideale Lebensbedingungen.',
        4 => '-',
    ),
    
    'y' => array(
        0 => 'D�mon-Planet',
        1 => 'sehr aufw�ndig, aber m�glich',
        2 => 'unerme�liche Vorkommen aller Rohstoffe',
        3 => 'Planeten dieser Klasse sind Planeten bzw. Planetoiden haben eine extrem toxische Atmosph�re und ihre sehr aktive Oberfl�che k�hlt selten unter 500 Kelvin ab. Die Oberfl�chenwinde erreichen mehrfache Schallgeschwindigkeit und den aggresiven Atmosph�ren-Gasen k�nnen nur wenige Stoffe widerstehen. Mit massiver technischer Unterst�tzung und Versorgung von au�en ist Leben m�glich',
        4 => '-'
    ),
);

?>
