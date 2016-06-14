-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2016 a las 11:41:00
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientos`
--

CREATE TABLE `asientos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sala_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asientos`
--

INSERT INTO `asientos` (`id`, `nom`, `sala_id`) VALUES
(1662, 'f1a1', 1),
(1663, 'f1a2', 1),
(1664, 'f1a3', 1),
(1665, 'f1a4', 1),
(1666, 'f1a5', 1),
(1667, 'f1a6', 1),
(1668, 'f1a7', 1),
(1669, 'f1a8', 1),
(1670, 'f1a9', 1),
(1671, 'f1a10', 1),
(1672, 'f1a11', 1),
(1673, 'f1a12', 1),
(1674, 'f1a13', 1),
(1675, 'f1a14', 1),
(1676, 'f1a15', 1),
(1677, 'f1a16', 1),
(1678, 'f1a17', 1),
(1679, 'f1a18', 1),
(1680, 'f1a19', 1),
(1681, 'f2a1', 1),
(1682, 'f2a2', 1),
(1683, 'f2a3', 1),
(1684, 'f2a4', 1),
(1685, 'f2a5', 1),
(1686, 'f2a6', 1),
(1687, 'f2a7', 1),
(1688, 'f2a8', 1),
(1689, 'f2a9', 1),
(1690, 'f2a10', 1),
(1691, 'f2a11', 1),
(1692, 'f2a12', 1),
(1693, 'f2a13', 1),
(1694, 'f2a14', 1),
(1695, 'f2a15', 1),
(1696, 'f2a16', 1),
(1697, 'f2a17', 1),
(1698, 'f2a18', 1),
(1699, 'f2a19', 1),
(1700, 'f3a1', 1),
(1701, 'f3a2', 1),
(1702, 'f3a3', 1),
(1703, 'f3a4', 1),
(1704, 'f3a5', 1),
(1705, 'f3a6', 1),
(1706, 'f3a7', 1),
(1707, 'f3a8', 1),
(1708, 'f3a9', 1),
(1709, 'f3a10', 1),
(1710, 'f3a11', 1),
(1711, 'f3a12', 1),
(1712, 'f3a13', 1),
(1713, 'f3a14', 1),
(1714, 'f3a15', 1),
(1715, 'f3a16', 1),
(1716, 'f3a17', 1),
(1717, 'f3a18', 1),
(1718, 'f3a19', 1),
(1719, 'f4a1', 1),
(1720, 'f4a2', 1),
(1721, 'f4a3', 1),
(1722, 'f4a4', 1),
(1723, 'f4a5', 1),
(1724, 'f4a6', 1),
(1725, 'f4a7', 1),
(1726, 'f4a8', 1),
(1727, 'f4a9', 1),
(1728, 'f4a10', 1),
(1729, 'f4a11', 1),
(1730, 'f4a12', 1),
(1731, 'f4a13', 1),
(1732, 'f4a14', 1),
(1733, 'f4a15', 1),
(1734, 'f4a16', 1),
(1735, 'f4a17', 1),
(1736, 'f4a18', 1),
(1737, 'f4a19', 1),
(1738, 'f5a1', 1),
(1739, 'f5a2', 1),
(1740, 'f5a3', 1),
(1741, 'f5a4', 1),
(1742, 'f5a5', 1),
(1743, 'f5a6', 1),
(1744, 'f5a7', 1),
(1745, 'f5a8', 1),
(1746, 'f5a9', 1),
(1747, 'f5a10', 1),
(1748, 'f5a11', 1),
(1749, 'f5a12', 1),
(1750, 'f5a13', 1),
(1751, 'f5a14', 1),
(1752, 'f5a15', 1),
(1753, 'f5a16', 1),
(1754, 'f5a17', 1),
(1755, 'f5a18', 1),
(1756, 'f5a19', 1),
(1757, 'f6a1', 1),
(1758, 'f6a2', 1),
(1759, 'f6a3', 1),
(1760, 'f6a4', 1),
(1761, 'f6a5', 1),
(1762, 'f6a6', 1),
(1763, 'f6a7', 1),
(1764, 'f6a8', 1),
(1765, 'f6a9', 1),
(1766, 'f6a10', 1),
(1767, 'f6a11', 1),
(1768, 'f6a12', 1),
(1769, 'f6a13', 1),
(1770, 'f6a14', 1),
(1771, 'f6a15', 1),
(1772, 'f6a16', 1),
(1773, 'f6a17', 1),
(1774, 'f6a18', 1),
(1775, 'f6a19', 1),
(1776, 'f7a1', 1),
(1777, 'f7a2', 1),
(1778, 'f7a3', 1),
(1779, 'f7a4', 1),
(1780, 'f7a5', 1),
(1781, 'f7a6', 1),
(1782, 'f7a7', 1),
(1783, 'f7a8', 1),
(1784, 'f7a9', 1),
(1785, 'f7a10', 1),
(1786, 'f7a11', 1),
(1787, 'f7a12', 1),
(1788, 'f7a13', 1),
(1789, 'f7a14', 1),
(1790, 'f7a15', 1),
(1791, 'f7a16', 1),
(1792, 'f7a17', 1),
(1793, 'f7a18', 1),
(1794, 'f7a19', 1),
(1795, 'f8a1', 1),
(1796, 'f8a2', 1),
(1797, 'f8a3', 1),
(1798, 'f8a4', 1),
(1799, 'f8a5', 1),
(1800, 'f8a6', 1),
(1801, 'f8a7', 1),
(1802, 'f8a8', 1),
(1803, 'f8a9', 1),
(1804, 'f8a10', 1),
(1805, 'f8a11', 1),
(1806, 'f8a12', 1),
(1807, 'f8a13', 1),
(1808, 'f8a14', 1),
(1809, 'f8a15', 1),
(1810, 'f8a16', 1),
(1811, 'f8a17', 1),
(1812, 'f8a18', 1),
(1813, 'f8a19', 1),
(1814, 'f9a1', 1),
(1815, 'f9a2', 1),
(1816, 'f9a3', 1),
(1817, 'f9a4', 1),
(1818, 'f9a5', 1),
(1819, 'f9a6', 1),
(1820, 'f9a7', 1),
(1821, 'f9a8', 1),
(1822, 'f9a9', 1),
(1823, 'f9a10', 1),
(1824, 'f9a11', 1),
(1825, 'f9a12', 1),
(1826, 'f9a13', 1),
(1827, 'f9a14', 1),
(1828, 'f9a15', 1),
(1829, 'f9a16', 1),
(1830, 'f9a17', 1),
(1831, 'f9a18', 1),
(1832, 'f9a19', 1),
(1833, 'f10a1', 1),
(1834, 'f10a2', 1),
(1835, 'f10a3', 1),
(1836, 'f10a4', 1),
(1837, 'f10a5', 1),
(1838, 'f10a6', 1),
(1839, 'f10a7', 1),
(1840, 'f10a8', 1),
(1841, 'f10a9', 1),
(1842, 'f10a10', 1),
(1843, 'f10a11', 1),
(1844, 'f10a12', 1),
(1845, 'f10a13', 1),
(1846, 'f10a14', 1),
(1847, 'f10a15', 1),
(1848, 'f10a16', 1),
(1849, 'f10a17', 1),
(1850, 'f10a18', 1),
(1851, 'f10a19', 1),
(1852, 'f11a1', 1),
(1853, 'f11a2', 1),
(1854, 'f11a3', 1),
(1855, 'f11a4', 1),
(1856, 'f11a5', 1),
(1857, 'f11a6', 1),
(1858, 'f11a7', 1),
(1859, 'f11a8', 1),
(1860, 'f11a9', 1),
(1861, 'f11a10', 1),
(1862, 'f11a11', 1),
(1863, 'f11a12', 1),
(1864, 'f11a13', 1),
(1865, 'f11a14', 1),
(1866, 'f11a15', 1),
(1867, 'f11a16', 1),
(1868, 'f11a17', 1),
(1869, 'f11a18', 1),
(1870, 'f11a19', 1),
(1871, 'f12a1', 1),
(1872, 'f12a2', 1),
(1873, 'f12a3', 1),
(1874, 'f12a4', 1),
(1875, 'f12a5', 1),
(1876, 'f12a6', 1),
(1877, 'f12a7', 1),
(1878, 'f12a8', 1),
(1879, 'f12a9', 1),
(1880, 'f12a10', 1),
(1881, 'f12a11', 1),
(1882, 'f12a12', 1),
(1883, 'f12a13', 1),
(1884, 'f12a14', 1),
(1885, 'f12a15', 1),
(1886, 'f12a16', 1),
(1887, 'f12a17', 1),
(1888, 'f12a18', 1),
(1889, 'f12a19', 1),
(1890, 'f13a1', 1),
(1891, 'f13a2', 1),
(1892, 'f13a3', 1),
(1893, 'f13a4', 1),
(1894, 'f13a5', 1),
(1895, 'f13a6', 1),
(1896, 'f13a7', 1),
(1897, 'f13a8', 1),
(1898, 'f13a9', 1),
(1899, 'f13a10', 1),
(1900, 'f13a11', 1),
(1901, 'f13a12', 1),
(1902, 'f13a13', 1),
(1903, 'f13a14', 1),
(1904, 'f13a15', 1),
(1905, 'f13a16', 1),
(1906, 'f13a17', 1),
(1907, 'f13a18', 1),
(1908, 'f13a19', 1),
(1909, 'f14a1', 1),
(1910, 'f14a2', 1),
(1911, 'f14a3', 1),
(1912, 'f14a4', 1),
(1913, 'f14a5', 1),
(1914, 'f14a6', 1),
(1915, 'f14a7', 1),
(1916, 'f14a8', 1),
(1917, 'f14a9', 1),
(1918, 'f14a10', 1),
(1919, 'f14a11', 1),
(1920, 'f14a12', 1),
(1921, 'f14a13', 1),
(1922, 'f14a14', 1),
(1923, 'f14a15', 1),
(1924, 'f14a16', 1),
(1925, 'f14a17', 1),
(1926, 'f14a18', 1),
(1927, 'f14a19', 1),
(1928, 'f1a1', 2),
(1929, 'f1a2', 2),
(1930, 'f1a3', 2),
(1931, 'f1a4', 2),
(1932, 'f1a5', 2),
(1933, 'f1a6', 2),
(1934, 'f1a7', 2),
(1935, 'f1a8', 2),
(1936, 'f1a9', 2),
(1937, 'f1a10', 2),
(1938, 'f1a11', 2),
(1939, 'f1a12', 2),
(1940, 'f1a13', 2),
(1941, 'f1a14', 2),
(1942, 'f1a15', 2),
(1943, 'f1a16', 2),
(1944, 'f1a17', 2),
(1945, 'f1a18', 2),
(1946, 'f1a19', 2),
(1947, 'f2a1', 2),
(1948, 'f2a2', 2),
(1949, 'f2a3', 2),
(1950, 'f2a4', 2),
(1951, 'f2a5', 2),
(1952, 'f2a6', 2),
(1953, 'f2a7', 2),
(1954, 'f2a8', 2),
(1955, 'f2a9', 2),
(1956, 'f2a10', 2),
(1957, 'f2a11', 2),
(1958, 'f2a12', 2),
(1959, 'f2a13', 2),
(1960, 'f2a14', 2),
(1961, 'f2a15', 2),
(1962, 'f2a16', 2),
(1963, 'f2a17', 2),
(1964, 'f2a18', 2),
(1965, 'f2a19', 2),
(1966, 'f3a1', 2),
(1967, 'f3a2', 2),
(1968, 'f3a3', 2),
(1969, 'f3a4', 2),
(1970, 'f3a5', 2),
(1971, 'f3a6', 2),
(1972, 'f3a7', 2),
(1973, 'f3a8', 2),
(1974, 'f3a9', 2),
(1975, 'f3a10', 2),
(1976, 'f3a11', 2),
(1977, 'f3a12', 2),
(1978, 'f3a13', 2),
(1979, 'f3a14', 2),
(1980, 'f3a15', 2),
(1981, 'f3a16', 2),
(1982, 'f3a17', 2),
(1983, 'f3a18', 2),
(1984, 'f3a19', 2),
(1985, 'f4a1', 2),
(1986, 'f4a2', 2),
(1987, 'f4a3', 2),
(1988, 'f4a4', 2),
(1989, 'f4a5', 2),
(1990, 'f4a6', 2),
(1991, 'f4a7', 2),
(1992, 'f4a8', 2),
(1993, 'f4a9', 2),
(1994, 'f4a10', 2),
(1995, 'f4a11', 2),
(1996, 'f4a12', 2),
(1997, 'f4a13', 2),
(1998, 'f4a14', 2),
(1999, 'f4a15', 2),
(2000, 'f4a16', 2),
(2001, 'f4a17', 2),
(2002, 'f4a18', 2),
(2003, 'f4a19', 2),
(2004, 'f5a1', 2),
(2005, 'f5a2', 2),
(2006, 'f5a3', 2),
(2007, 'f5a4', 2),
(2008, 'f5a5', 2),
(2009, 'f5a6', 2),
(2010, 'f5a7', 2),
(2011, 'f5a8', 2),
(2012, 'f5a9', 2),
(2013, 'f5a10', 2),
(2014, 'f5a11', 2),
(2015, 'f5a12', 2),
(2016, 'f5a13', 2),
(2017, 'f5a14', 2),
(2018, 'f5a15', 2),
(2019, 'f5a16', 2),
(2020, 'f5a17', 2),
(2021, 'f5a18', 2),
(2022, 'f5a19', 2),
(2023, 'f6a1', 2),
(2024, 'f6a2', 2),
(2025, 'f6a3', 2),
(2026, 'f6a4', 2),
(2027, 'f6a5', 2),
(2028, 'f6a6', 2),
(2029, 'f6a7', 2),
(2030, 'f6a8', 2),
(2031, 'f6a9', 2),
(2032, 'f6a10', 2),
(2033, 'f6a11', 2),
(2034, 'f6a12', 2),
(2035, 'f6a13', 2),
(2036, 'f6a14', 2),
(2037, 'f6a15', 2),
(2038, 'f6a16', 2),
(2039, 'f6a17', 2),
(2040, 'f6a18', 2),
(2041, 'f6a19', 2),
(2042, 'f7a1', 2),
(2043, 'f7a2', 2),
(2044, 'f7a3', 2),
(2045, 'f7a4', 2),
(2046, 'f7a5', 2),
(2047, 'f7a6', 2),
(2048, 'f7a7', 2),
(2049, 'f7a8', 2),
(2050, 'f7a9', 2),
(2051, 'f7a10', 2),
(2052, 'f7a11', 2),
(2053, 'f7a12', 2),
(2054, 'f7a13', 2),
(2055, 'f7a14', 2),
(2056, 'f7a15', 2),
(2057, 'f7a16', 2),
(2058, 'f7a17', 2),
(2059, 'f7a18', 2),
(2060, 'f7a19', 2),
(2061, 'f8a1', 2),
(2062, 'f8a2', 2),
(2063, 'f8a3', 2),
(2064, 'f8a4', 2),
(2065, 'f8a5', 2),
(2066, 'f8a6', 2),
(2067, 'f8a7', 2),
(2068, 'f8a8', 2),
(2069, 'f8a9', 2),
(2070, 'f8a10', 2),
(2071, 'f8a11', 2),
(2072, 'f8a12', 2),
(2073, 'f8a13', 2),
(2074, 'f8a14', 2),
(2075, 'f8a15', 2),
(2076, 'f8a16', 2),
(2077, 'f8a17', 2),
(2078, 'f8a18', 2),
(2079, 'f8a19', 2),
(2080, 'f9a1', 2),
(2081, 'f9a2', 2),
(2082, 'f9a3', 2),
(2083, 'f9a4', 2),
(2084, 'f9a5', 2),
(2085, 'f9a6', 2),
(2086, 'f9a7', 2),
(2087, 'f9a8', 2),
(2088, 'f9a9', 2),
(2089, 'f9a10', 2),
(2090, 'f9a11', 2),
(2091, 'f9a12', 2),
(2092, 'f9a13', 2),
(2093, 'f9a14', 2),
(2094, 'f9a15', 2),
(2095, 'f9a16', 2),
(2096, 'f9a17', 2),
(2097, 'f9a18', 2),
(2098, 'f9a19', 2),
(2099, 'f10a1', 2),
(2100, 'f10a2', 2),
(2101, 'f10a3', 2),
(2102, 'f10a4', 2),
(2103, 'f10a5', 2),
(2104, 'f10a6', 2),
(2105, 'f10a7', 2),
(2106, 'f10a8', 2),
(2107, 'f10a9', 2),
(2108, 'f10a10', 2),
(2109, 'f10a11', 2),
(2110, 'f10a12', 2),
(2111, 'f10a13', 2),
(2112, 'f10a14', 2),
(2113, 'f10a15', 2),
(2114, 'f10a16', 2),
(2115, 'f10a17', 2),
(2116, 'f10a18', 2),
(2117, 'f10a19', 2),
(2118, 'f11a1', 2),
(2119, 'f11a2', 2),
(2120, 'f11a3', 2),
(2121, 'f11a4', 2),
(2122, 'f11a5', 2),
(2123, 'f11a6', 2),
(2124, 'f11a7', 2),
(2125, 'f11a8', 2),
(2126, 'f11a9', 2),
(2127, 'f11a10', 2),
(2128, 'f11a11', 2),
(2129, 'f11a12', 2),
(2130, 'f11a13', 2),
(2131, 'f11a14', 2),
(2132, 'f11a15', 2),
(2133, 'f11a16', 2),
(2134, 'f11a17', 2),
(2135, 'f11a18', 2),
(2136, 'f11a19', 2),
(2137, 'f12a1', 2),
(2138, 'f12a2', 2),
(2139, 'f12a3', 2),
(2140, 'f12a4', 2),
(2141, 'f12a5', 2),
(2142, 'f12a6', 2),
(2143, 'f12a7', 2),
(2144, 'f12a8', 2),
(2145, 'f12a9', 2),
(2146, 'f12a10', 2),
(2147, 'f12a11', 2),
(2148, 'f12a12', 2),
(2149, 'f12a13', 2),
(2150, 'f12a14', 2),
(2151, 'f12a15', 2),
(2152, 'f12a16', 2),
(2153, 'f12a17', 2),
(2154, 'f12a18', 2),
(2155, 'f12a19', 2),
(2156, 'f13a1', 2),
(2157, 'f13a2', 2),
(2158, 'f13a3', 2),
(2159, 'f13a4', 2),
(2160, 'f13a5', 2),
(2161, 'f13a6', 2),
(2162, 'f13a7', 2),
(2163, 'f13a8', 2),
(2164, 'f13a9', 2),
(2165, 'f13a10', 2),
(2166, 'f13a11', 2),
(2167, 'f13a12', 2),
(2168, 'f13a13', 2),
(2169, 'f13a14', 2),
(2170, 'f13a15', 2),
(2171, 'f13a16', 2),
(2172, 'f13a17', 2),
(2173, 'f13a18', 2),
(2174, 'f13a19', 2),
(2175, 'f14a1', 2),
(2176, 'f14a2', 2),
(2177, 'f14a3', 2),
(2178, 'f14a4', 2),
(2179, 'f14a5', 2),
(2180, 'f14a6', 2),
(2181, 'f14a7', 2),
(2182, 'f14a8', 2),
(2183, 'f14a9', 2),
(2184, 'f14a10', 2),
(2185, 'f14a11', 2),
(2186, 'f14a12', 2),
(2187, 'f14a13', 2),
(2188, 'f14a14', 2),
(2189, 'f14a15', 2),
(2190, 'f14a16', 2),
(2191, 'f14a17', 2),
(2192, 'f14a18', 2),
(2193, 'f14a19', 2),
(2194, 'f1a6', 3),
(2195, 'f1a7', 3),
(2196, 'f1a8', 3),
(2197, 'f1a9', 3),
(2198, 'f1a10', 3),
(2199, 'f1a11', 3),
(2200, 'f1a12', 3),
(2201, 'f1a13', 3),
(2202, 'f1a14', 3),
(2203, 'f2a6', 3),
(2204, 'f2a7', 3),
(2205, 'f2a8', 3),
(2206, 'f2a9', 3),
(2207, 'f2a10', 3),
(2208, 'f2a11', 3),
(2209, 'f2a12', 3),
(2210, 'f2a13', 3),
(2211, 'f2a14', 3),
(2212, 'f3a6', 3),
(2213, 'f3a7', 3),
(2214, 'f3a8', 3),
(2215, 'f3a9', 3),
(2216, 'f3a10', 3),
(2217, 'f3a11', 3),
(2218, 'f3a12', 3),
(2219, 'f3a13', 3),
(2220, 'f3a14', 3),
(2221, 'f4a6', 3),
(2222, 'f4a7', 3),
(2223, 'f4a8', 3),
(2224, 'f4a9', 3),
(2225, 'f4a10', 3),
(2226, 'f4a11', 3),
(2227, 'f4a12', 3),
(2228, 'f4a13', 3),
(2229, 'f4a14', 3),
(2230, 'f5a6', 3),
(2231, 'f5a7', 3),
(2232, 'f5a8', 3),
(2233, 'f5a9', 3),
(2234, 'f5a10', 3),
(2235, 'f5a11', 3),
(2236, 'f5a12', 3),
(2237, 'f5a13', 3),
(2238, 'f5a14', 3),
(2239, 'f6a6', 3),
(2240, 'f6a7', 3),
(2241, 'f6a8', 3),
(2242, 'f6a9', 3),
(2243, 'f6a10', 3),
(2244, 'f6a11', 3),
(2245, 'f6a12', 3),
(2246, 'f6a13', 3),
(2247, 'f6a14', 3),
(2248, 'f7a6', 3),
(2249, 'f7a7', 3),
(2250, 'f7a8', 3),
(2251, 'f7a9', 3),
(2252, 'f7a10', 3),
(2253, 'f7a11', 3),
(2254, 'f7a12', 3),
(2255, 'f7a13', 3),
(2256, 'f7a14', 3),
(2257, 'f8a6', 3),
(2258, 'f8a7', 3),
(2259, 'f8a8', 3),
(2260, 'f8a9', 3),
(2261, 'f8a10', 3),
(2262, 'f8a11', 3),
(2263, 'f8a12', 3),
(2264, 'f8a13', 3),
(2265, 'f8a14', 3),
(2266, 'f9a1', 3),
(2267, 'f9a2', 3),
(2268, 'f9a3', 3),
(2269, 'f9a4', 3),
(2270, 'f9a5', 3),
(2271, 'f9a6', 3),
(2272, 'f9a7', 3),
(2273, 'f9a8', 3),
(2274, 'f9a9', 3),
(2275, 'f9a10', 3),
(2276, 'f9a11', 3),
(2277, 'f9a12', 3),
(2278, 'f9a13', 3),
(2279, 'f9a14', 3),
(2280, 'f9a15', 3),
(2281, 'f9a16', 3),
(2282, 'f9a17', 3),
(2283, 'f9a18', 3),
(2284, 'f9a19', 3),
(2285, 'f10a1', 3),
(2286, 'f10a2', 3),
(2287, 'f10a3', 3),
(2288, 'f10a4', 3),
(2289, 'f10a5', 3),
(2290, 'f10a6', 3),
(2291, 'f10a7', 3),
(2292, 'f10a8', 3),
(2293, 'f10a9', 3),
(2294, 'f10a10', 3),
(2295, 'f10a11', 3),
(2296, 'f10a12', 3),
(2297, 'f10a13', 3),
(2298, 'f10a14', 3),
(2299, 'f10a15', 3),
(2300, 'f10a16', 3),
(2301, 'f10a17', 3),
(2302, 'f10a18', 3),
(2303, 'f10a19', 3),
(2304, 'f11a1', 3),
(2305, 'f11a2', 3),
(2306, 'f11a3', 3),
(2307, 'f11a4', 3),
(2308, 'f11a5', 3),
(2309, 'f11a6', 3),
(2310, 'f11a7', 3),
(2311, 'f11a8', 3),
(2312, 'f11a9', 3),
(2313, 'f11a10', 3),
(2314, 'f11a11', 3),
(2315, 'f11a12', 3),
(2316, 'f11a13', 3),
(2317, 'f11a14', 3),
(2318, 'f11a15', 3),
(2319, 'f11a16', 3),
(2320, 'f11a17', 3),
(2321, 'f11a18', 3),
(2322, 'f11a19', 3),
(2323, 'f12a1', 3),
(2324, 'f12a2', 3),
(2325, 'f12a3', 3),
(2326, 'f12a4', 3),
(2327, 'f12a5', 3),
(2328, 'f12a6', 3),
(2329, 'f12a7', 3),
(2330, 'f12a8', 3),
(2331, 'f12a9', 3),
(2332, 'f12a10', 3),
(2333, 'f12a11', 3),
(2334, 'f12a12', 3),
(2335, 'f12a13', 3),
(2336, 'f12a14', 3),
(2337, 'f12a15', 3),
(2338, 'f12a16', 3),
(2339, 'f12a17', 3),
(2340, 'f12a18', 3),
(2341, 'f12a19', 3),
(2342, 'f13a1', 3),
(2343, 'f13a2', 3),
(2344, 'f13a3', 3),
(2345, 'f13a4', 3),
(2346, 'f13a5', 3),
(2347, 'f13a6', 3),
(2348, 'f13a7', 3),
(2349, 'f13a8', 3),
(2350, 'f13a9', 3),
(2351, 'f13a10', 3),
(2352, 'f13a11', 3),
(2353, 'f13a12', 3),
(2354, 'f13a13', 3),
(2355, 'f13a14', 3),
(2356, 'f13a15', 3),
(2357, 'f13a16', 3),
(2358, 'f13a17', 3),
(2359, 'f13a18', 3),
(2360, 'f13a19', 3),
(2361, 'f14a1', 3),
(2362, 'f14a2', 3),
(2363, 'f14a3', 3),
(2364, 'f14a4', 3),
(2365, 'f14a5', 3),
(2366, 'f14a6', 3),
(2367, 'f14a7', 3),
(2368, 'f14a8', 3),
(2369, 'f14a9', 3),
(2370, 'f14a10', 3),
(2371, 'f14a11', 3),
(2372, 'f14a12', 3),
(2373, 'f14a13', 3),
(2374, 'f14a14', 3),
(2375, 'f14a15', 3),
(2376, 'f14a16', 3),
(2377, 'f14a17', 3),
(2378, 'f14a18', 3),
(2379, 'f14a19', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientosbloqueados`
--

CREATE TABLE `asientosbloqueados` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_asiento` int(11) UNSIGNED DEFAULT NULL,
  `id_sesion` int(11) UNSIGNED DEFAULT NULL,
  `hora` datetime DEFAULT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asientosbloqueados`
--

INSERT INTO `asientosbloqueados` (`id`, `id_asiento`, `id_sesion`, `hora`, `id_usuario`) VALUES
(6, 1901, 88, '2016-06-07 11:34:37', 3372);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartelera`
--

CREATE TABLE `cartelera` (
  `id` int(11) UNSIGNED NOT NULL,
  `pelicula_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cartelera`
--

INSERT INTO `cartelera` (`id`, `pelicula_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) UNSIGNED NOT NULL,
  `precio` double DEFAULT NULL,
  `tiemporecarga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `precio`, `tiemporecarga`) VALUES
(1, 6.9, 1500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradareserva`
--

CREATE TABLE `entradareserva` (
  `id` int(11) UNSIGNED NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `asientos_id` int(11) UNSIGNED DEFAULT NULL,
  `sala_id` int(11) UNSIGNED DEFAULT NULL,
  `sesion_id` int(11) UNSIGNED DEFAULT NULL,
  `precio` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entradareserva`
--

INSERT INTO `entradareserva` (`id`, `fecha`, `asientos_id`, `sala_id`, `sesion_id`, `precio`) VALUES
(6, '2016-05-07 10:04:02', NULL, 1, 10, 6.7),
(7, '2016-05-07 10:04:02', NULL, 1, 10, 6.7),
(8, '2016-05-07 10:04:02', NULL, 1, 10, 6.7),
(9, '2016-05-07 10:05:37', NULL, 1, 29, 6.7),
(10, '2016-05-07 10:05:37', NULL, 1, 29, 6.7),
(11, '2016-05-07 10:06:11', NULL, 1, 46, 6.7),
(12, '2016-05-07 10:06:21', NULL, 1, 46, 6.7),
(13, '2016-05-07 10:08:09', NULL, 1, 46, 6.7),
(14, '2016-05-07 10:08:09', NULL, 1, 46, 6.7),
(15, '2016-05-07 10:08:09', NULL, 1, 46, 6.7),
(16, '2016-05-07 10:08:09', NULL, 1, 46, 6.7),
(17, '2016-05-07 10:08:09', NULL, 1, 46, 6.7),
(18, '2016-05-08 11:51:11', NULL, 2, 57, 6.7),
(19, '2016-05-08 11:51:11', NULL, 2, 57, 6.7),
(20, '2016-05-08 11:51:11', NULL, 2, 57, 6.7),
(21, '2016-06-04 19:59:04', 2202, 3, 81, 6.7),
(22, '2016-06-04 19:59:04', 2201, 3, 81, 6.7),
(23, '2016-06-04 19:59:04', 2199, 3, 81, 6.7),
(24, '2016-06-07 11:37:06', 1901, 1, 88, 6.9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradareserva_factura`
--

CREATE TABLE `entradareserva_factura` (
  `id` int(11) UNSIGNED NOT NULL,
  `factura_id` int(11) UNSIGNED DEFAULT NULL,
  `entradareserva_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entradareserva_factura`
--

INSERT INTO `entradareserva_factura` (`id`, `factura_id`, `entradareserva_id`) VALUES
(5, 6, 6),
(6, 6, 7),
(7, 6, 8),
(8, 7, 9),
(9, 7, 10),
(10, 8, 11),
(11, 9, 12),
(12, 10, 13),
(13, 10, 14),
(14, 10, 15),
(15, 10, 16),
(16, 10, 17),
(17, 11, 18),
(18, 11, 19),
(19, 11, 20),
(20, 12, 21),
(21, 12, 22),
(22, 12, 23),
(23, 13, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) UNSIGNED NOT NULL,
  `usuario_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `usuario_id`) VALUES
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 65),
(12, 65),
(13, 65);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `id` int(11) UNSIGNED NOT NULL,
  `uniqid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problema` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_incidencia` datetime DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id`, `uniqid`, `problema`, `fecha_incidencia`, `estado`, `usuario_id`) VALUES
(1, '57553b6641bd3', 'asdddd', '2016-06-06 10:59:18', 'activa', 65),
(2, '57553b715b48e', 'asdddd', '2016-06-06 10:59:29', 'activa', 65),
(3, '57553b7c64f5e', 'asddddd', '2016-06-06 10:59:40', 'activa', 65),
(4, '57553b8eeb7f3', 'sdd', '2016-06-06 10:59:58', 'activa', 65);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) UNSIGNED NOT NULL,
  `mensaje` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitente` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `remitente_id` int(11) UNSIGNED DEFAULT NULL,
  `incidencia_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `mensaje`, `remitente`, `fecha_hora`, `remitente_id`, `incidencia_id`) VALUES
(1, 'sadsas', 'isma.sanfer.94@gmail.com', '2016-06-06 10:59:18', 65, 1),
(2, 'sadsas', 'isma.sanfer.94@gmail.com', '2016-06-06 10:59:29', 65, 2),
(3, 'sadsas', 'isma.sanfer.94@gmail.com', '2016-06-06 10:59:40', 65, 3),
(4, 'aaaa', 'isma.sanfer.94@gmail.com', '2016-06-06 10:59:58', 65, 4),
(5, 'assdas', 'soporte', '2016-06-06 11:00:30', 65, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id` int(11) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duracion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id`, `titulo`, `director`, `ruta`, `duracion`) VALUES
(1, 'Batman', 'qqqqqqqaa', 'localhost://dsasa.txt', '202'),
(2, 'El señor de los anillos', 'Director Señor', 'rutaa', '190'),
(3, 'aaaaa', 'bbbbbbb', NULL, '203'),
(4, 'Nueva Peli', 'aaaa', NULL, '208');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `id` int(11) UNSIGNED NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`id`, `tipo`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id` int(11) UNSIGNED NOT NULL,
  `hora` datetime DEFAULT NULL,
  `pelicula_id` int(11) UNSIGNED DEFAULT NULL,
  `sala_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id`, `hora`, `pelicula_id`, `sala_id`) VALUES
(3, '2016-03-20 12:00:00', 1, 1),
(4, '2016-03-20 14:00:00', 1, 1),
(5, '2016-03-20 16:00:00', 1, 1),
(6, '2016-03-20 18:00:00', 1, 1),
(7, '2016-03-20 20:00:00', 2, 1),
(8, '2016-03-20 22:00:00', 1, 1),
(9, '2016-05-07 17:00:00', 3, 1),
(10, '2016-05-07 19:00:00', 3, 1),
(11, '2016-05-08 17:00:00', 3, 1),
(12, '2016-05-08 19:00:00', 3, 1),
(13, '2016-05-09 17:00:00', 3, 1),
(14, '2016-05-09 19:00:00', 3, 1),
(15, '2016-05-10 17:00:00', 3, 1),
(16, '2016-05-10 19:00:00', 3, 1),
(17, '2016-05-11 17:00:00', 3, 1),
(18, '2016-05-11 19:00:00', 3, 1),
(19, '2016-05-12 17:00:00', 3, 1),
(20, '2016-05-12 19:00:00', 3, 1),
(21, '2016-05-13 17:00:00', 3, 1),
(22, '2016-05-13 19:00:00', 3, 1),
(23, '2016-05-05 17:00:00', 1, 1),
(24, '2016-05-05 18:00:00', 1, 1),
(25, '2016-05-06 17:00:00', 1, 1),
(26, '2016-05-06 18:00:00', 1, 1),
(27, '2016-05-07 17:00:00', 1, 1),
(28, '2016-05-07 18:00:00', 1, 1),
(29, '2016-05-08 17:00:00', 1, 1),
(30, '2016-05-08 18:00:00', 1, 1),
(31, '2016-05-09 17:00:00', 1, 1),
(32, '2016-05-09 18:00:00', 1, 1),
(33, '2016-05-10 17:00:00', 1, 1),
(34, '2016-05-10 18:00:00', 1, 1),
(35, '2016-05-11 17:00:00', 1, 1),
(36, '2016-05-11 18:00:00', 1, 1),
(37, '2016-05-12 17:00:00', 1, 1),
(38, '2016-05-12 18:00:00', 1, 1),
(39, '2016-05-13 17:00:00', 1, 1),
(40, '2016-05-13 18:00:00', 1, 1),
(41, '2016-05-14 17:00:00', 1, 1),
(42, '2016-05-14 18:00:00', 1, 1),
(43, '2016-05-15 17:00:00', 1, 1),
(44, '2016-05-15 18:00:00', 1, 1),
(45, '2016-05-06 18:00:00', 2, 1),
(46, '2016-05-07 18:00:00', 2, 1),
(47, '2016-05-08 18:00:00', 2, 1),
(48, '2016-05-09 18:00:00', 2, 1),
(49, '2016-05-10 18:00:00', 2, 1),
(50, '2016-05-06 18:00:00', 2, 1),
(55, '2016-05-10 19:00:00', 2, 2),
(56, '2016-05-11 19:00:00', 2, 2),
(57, '2016-05-12 19:00:00', 2, 2),
(58, '2016-05-13 19:00:00', 2, 2),
(59, '2016-05-08 21:00:00', 4, 2),
(60, '2016-05-08 22:00:00', 4, 2),
(61, '2016-05-09 21:00:00', 4, 2),
(62, '2016-05-09 22:00:00', 4, 2),
(63, '2016-05-10 21:00:00', 4, 2),
(64, '2016-05-10 22:00:00', 4, 2),
(65, '2016-05-14 16:00:00', 1, 2),
(66, '2016-05-14 17:00:00', 1, 2),
(67, '2016-05-15 16:00:00', 1, 2),
(68, '2016-05-15 17:00:00', 1, 2),
(69, '2016-05-14 16:00:00', 4, 2),
(70, '2016-05-14 17:00:00', 4, 2),
(71, '2016-05-15 16:00:00', 4, 2),
(72, '2016-05-15 17:00:00', 4, 2),
(73, '2016-06-04 16:00:00', 1, 1),
(74, '2016-06-05 16:00:00', 1, 1),
(75, '2016-06-06 16:00:00', 1, 1),
(76, '2016-06-04 17:00:00', 1, 2),
(77, '2016-06-05 17:00:00', 1, 2),
(78, '2016-06-06 17:00:00', 1, 2),
(79, '2016-06-04 18:00:00', 1, 3),
(80, '2016-06-05 18:00:00', 1, 3),
(81, '2016-06-06 18:00:00', 1, 3),
(82, '2016-06-07 16:00:00', 2, 1),
(83, '2016-06-08 16:00:00', 2, 1),
(84, '2016-06-09 16:00:00', 2, 1),
(85, '2016-06-10 16:00:00', 2, 1),
(86, '2016-06-11 16:00:00', 2, 1),
(87, '2016-06-12 16:00:00', 2, 1),
(88, '2016-06-13 16:00:00', 2, 1),
(89, '2016-06-14 16:00:00', 2, 1),
(90, '2016-06-15 16:00:00', 2, 1),
(91, '2016-06-16 16:00:00', 2, 1),
(92, '2016-06-17 16:00:00', 2, 1),
(93, '2016-06-18 16:00:00', 2, 1),
(94, '2016-06-07 18:00:00', 2, 2),
(95, '2016-06-08 18:00:00', 2, 2),
(96, '2016-06-09 18:00:00', 2, 2),
(97, '2016-06-10 18:00:00', 2, 2),
(98, '2016-06-11 18:00:00', 2, 2),
(99, '2016-06-12 18:00:00', 2, 2),
(100, '2016-06-13 18:00:00', 2, 2),
(101, '2016-06-14 18:00:00', 2, 2),
(102, '2016-06-15 18:00:00', 2, 2),
(103, '2016-06-16 18:00:00', 2, 2),
(104, '2016-06-17 18:00:00', 2, 2),
(105, '2016-06-18 18:00:00', 2, 2),
(106, '2016-06-07 20:00:00', 2, 3),
(107, '2016-06-08 20:00:00', 2, 3),
(108, '2016-06-09 20:00:00', 2, 3),
(109, '2016-06-10 20:00:00', 2, 3),
(110, '2016-06-11 20:00:00', 2, 3),
(111, '2016-06-12 20:00:00', 2, 3),
(112, '2016-06-13 20:00:00', 2, 3),
(113, '2016-06-14 20:00:00', 2, 3),
(114, '2016-06-15 20:00:00', 2, 3),
(115, '2016-06-16 20:00:00', 2, 3),
(116, '2016-06-17 20:00:00', 2, 3),
(117, '2016-06-18 20:00:00', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) UNSIGNED NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hash` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `ciudad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verificado` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uniqid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `hash`, `nombre`, `apellidos`, `fechanacimiento`, `ciudad`, `verificado`, `uniqid`, `admin`) VALUES
(1, 'ismael', 'aaaa', 'Ismael', 'Nuñez Garcia', '1994-03-03', 'Madrid', 'NO', NULL, ''),
(57, 'charly.9349@gmail.com', '$2y$10$T51GCIFRfniNqYKKgNlUju2u.nNfycfEM0Cout1iZ7MUyMuBgXiGy', 'Carlos', 'Garbajosa ', '1993-02-03', 'Madrid', 'SI', '570a664d5105f', ''),
(64, 'c.garbajosabarroso@gmail.com', '$2y$10$PHjdg/dS6LJaEDA00AUd/eeFGRyDQBTLXSlhpU9mQygNthB0wC/rO', 'Carlos', 'Garbajosa', '1993-02-09', 'Madrid', 'SI', '571c9d2af4106', ''),
(65, 'isma.sanfer.94@gmail.com', '$2y$10$JJoZ92DPzyfCm..S6wXBRufVzR7PVnCVYUGDMZPIjZ48oOBSHVUSO', 'ismael', 'Nunez Garcia', '2011-02-09', 'Madrid', 'SI', '572da0aec2ff4', 'SI');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asientos`
--
ALTER TABLE `asientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_asientos_sala` (`sala_id`);

--
-- Indices de la tabla `asientosbloqueados`
--
ALTER TABLE `asientosbloqueados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cartelera`
--
ALTER TABLE `cartelera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_cartelera_pelicula` (`pelicula_id`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entradareserva`
--
ALTER TABLE `entradareserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_entradareserva_asientos` (`asientos_id`),
  ADD KEY `index_foreignkey_entradareserva_sala` (`sala_id`),
  ADD KEY `index_foreignkey_entradareserva_sesion` (`sesion_id`);

--
-- Indices de la tabla `entradareserva_factura`
--
ALTER TABLE `entradareserva_factura`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UQ_a651728e9f7e59994f2b21b19a2b2ed45e95990d` (`entradareserva_id`,`factura_id`),
  ADD KEY `index_foreignkey_entradareserva_factura_factura` (`factura_id`),
  ADD KEY `index_foreignkey_entradareserva_factura_entradareserva` (`entradareserva_id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_factura_usuario` (`usuario_id`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_incidencias_usuario` (`usuario_id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_mensajes_remitente` (`remitente_id`),
  ADD KEY `index_foreignkey_mensajes_incidencia` (`incidencia_id`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_sesion_pelicula` (`pelicula_id`),
  ADD KEY `index_foreignkey_sesion_sala` (`sala_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asientos`
--
ALTER TABLE `asientos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2380;
--
-- AUTO_INCREMENT de la tabla `asientosbloqueados`
--
ALTER TABLE `asientosbloqueados`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cartelera`
--
ALTER TABLE `cartelera`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `entradareserva`
--
ALTER TABLE `entradareserva`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `entradareserva_factura`
--
ALTER TABLE `entradareserva_factura`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asientos`
--
ALTER TABLE `asientos`
  ADD CONSTRAINT `c_fk_asientos_sala_id` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `cartelera`
--
ALTER TABLE `cartelera`
  ADD CONSTRAINT `c_fk_cartelera_pelicula_id` FOREIGN KEY (`pelicula_id`) REFERENCES `pelicula` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `entradareserva`
--
ALTER TABLE `entradareserva`
  ADD CONSTRAINT `c_fk_entradareserva_asientos_id` FOREIGN KEY (`asientos_id`) REFERENCES `asientos` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_entradareserva_sala_id` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_entradareserva_sesion_id` FOREIGN KEY (`sesion_id`) REFERENCES `sesion` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `entradareserva_factura`
--
ALTER TABLE `entradareserva_factura`
  ADD CONSTRAINT `c_fk_entradareserva_factura_entradareserva_id` FOREIGN KEY (`entradareserva_id`) REFERENCES `entradareserva` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c_fk_entradareserva_factura_factura_id` FOREIGN KEY (`factura_id`) REFERENCES `factura` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `c_fk_factura_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `c_fk_incidencias_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `c_fk_mensajes_incidencia_id` FOREIGN KEY (`incidencia_id`) REFERENCES `incidencias` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD CONSTRAINT `c_fk_sesion_pelicula_id` FOREIGN KEY (`pelicula_id`) REFERENCES `pelicula` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_sesion_sala_id` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
