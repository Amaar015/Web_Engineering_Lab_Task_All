<?php

class NewsController {
    public function displayHeadlines() {
        // Simulate fetching news data
        $newsData = $this->fetchNewsData();

        // Render view
        include 'View.php';
    }

    private function fetchNewsData() {
        // Simulated news data including headline, image URL, and detail
        return [
            [
                "headline" => "Breaking: New Study Shows Benefits of Meditation",
                "image" => "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTExIVFRUXFRUYFxYXFxcYFRYYFRcXGBUYFxcYHSggGB0mGxcVITEiJSkrLi8uFx8zODMtNygtLisBCgoKDg0OGhAQGi0dHSUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSstLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAAIEBQYBBwj/xABJEAACAQIEAwYDBgMGAwQLAAABAhEAAwQSITEFE0EGIlFhcYEykaEHFCNCsfBScsFTYoKS0eEVM/GDk6PSFiQ0Q0RUc6Kys8L/xAAYAQADAQEAAAAAAAAAAAAAAAAAAQIDBP/EACIRAQEBAQACAgICAwAAAAAAAAABEQISIRMxA0FR8CJhcf/aAAwDAQACEQMRAD8A1HDsS4VIPXUdNqumbTz322mqXA28yjxGvkP3/Srqzb6GuusYPhgCI3I3qVyARsKZaSPTwoxNZ0wBh42p7LpRBXYo0wLQowalTQaAJNLPQ5rmegCTTSaSU5koAZWm5KfSAoDlcJohSmGgG016dNButTIx2oZeuMaGTTAy3KdzKizTgaCSc9cz0KaU0GLmrk0wGnigHZaaRRFNJloBkCuUTljxrtAU2HgaDyqyVZiq6yBA0H+gqelyBTpJamncyohu1zmVOHqctyiB5qEj0ZWowaOaYwpBq7QDIpRRAtKKA6q0cChrTg1TTdK1Qcb7V4XC3ks3WYO4BkLKorEhWc9ASDtNXzGvMe2+KP3wd5RDgEELJQWOYF1EnvrPofIEAemmg3RXcPcJRSTJKqSRsSQCSK5cNMAM1BZqJcNAJqiMY0M0RqGaCcmug1yKQFAEU0RaEBThQBZroamqK7lNBnZ6cpoYFPWgH12lNKg1RbQj0+utSAK7NMLVSHWpKaGWp9ukEu0BUlRUe2lSEpGJFOArnSkDSM8CsV20+0jDcPflZGv3wJKKQqpOoDuZgkEGACY3iRWsx+MWzae65hLaM7fyoCx+gr5R4ljWv3rl5/juOzt6uZj0Ex7VHVxUj1ZPtrcn/wBhWP8A65B+fLq14b9sdhiBewt215oy3QPUEIfkDXidg/v9/v6VLtmlLRY+nOF8cw+Jtm7YurcQfFEyukw6nvKY6ETXnPaUi9iLl5FZkZSASu022t51k6GG+lef8F4pcw1wXbLlXA1jZh1Vwd1Pn6iCBWg4vw+1kunOAfu2KKls7FQuLWCWgmV20/iNVpPYuAcRS9ZUpm7oVGDKQQyqs+o1BkeNTnNeJYjtZi8BcuWLDW8nNutDIXI/EdQJJ0AVVEDQRTT9pnEP4rP/AHf+9T8kZ38vM9PZrlCivD8Z2+4lc/8AiAg8Et2x9SpP1rPXcbiWc3TeuG4T8eds3sZ+gpfLC+Xl9HtTSK8Lwfb7iFqBzi4AiLiq3zYjN9anp9qOOG62D6ow/R6r5eTncex0gK834X9qWYxesD/s2g+ytof8wrRjt9guXnzvm/suWebPh/D75o86qd839jzjQY/G27Fp711sqIJJ/QAdSTAA6kis92c7f4bESt0rYeTGdu4wnTvmAG2kH28vNu1vam7jnAbuWVPctAzrtmc/maPYbDqTWWMN3cwNR8m30y6/Ll9PpBFpMa8J4Fx/EYcjlXmAEdwktbPkUOg9oNe18K4guIspdXZxt/CRoy+xBHtVy604/JOkoCmtTiaEz1TR3NSpmau0BEttSIoeHmNaLVoNFHs0ECjW6VNKQ0ZTQUFFtmpVEtaFTkNRsTiVtqzuwVEVmZjsqqJYn0ANSbBfbXx8WcIMKp/ExBGbytIQWJ/mYKvmM3hXhEVfdquL3Mfi7l8hu8YtpBJW2uiKAPLU+ZJqIvBbu5AX13+QrO3avPSFbP7/AEqTaH7if37Vb8N7JYi6YRgPMr3dvGfCnHs1iRde1mRikBo11gNlWYBYKQYnrVZU7DeFcNe+3LSJgnWQABA/qK9I4hwrmBxzUTNaxCZWRGP417mhzmbUATI2Mz4VQcA7OOpW4L9m7bb8NoV0IlgSjzrbfQQGGpkDWJbx7hwU3d5XBYwT48rEtatkknogC69BTv0UVXb3AtzTiF+AzOvV7txgRuNnUb7zWVXEH1rW9r7CWmWyuzKNCfhW2cohdhLB2nxJrOX+H6StYdz36c/d58sqPnZthr4DUn0A3rR9pOCtw+zatuQcReHMujQ8pAe7bHhLTJG5tkbbg7BYUPjrWdSQha4R52xK/Jsp9qnfafiC2OJ1gWbQE+Gp/wDyLUZ/jokkjM2cQOo/pVvw3gxxa3RZXNctWzdCASzopAuZY3YZlOXqJjUAHPTBrdfZl2tw+Cv2w2EDPcuLbbEG4c1tXYL3beWABMmDJg69KmFzxNZLivCb2GcJeQ23KhspjMA05cwHwkjWDrBE02ziZ+In+nzrb/aTxnCYjFXmtpcW6LhR7guK9q7yot5uWRK6IAIMabHesY1hW2I9hB/y9famXebht24On/WnDFttpHvQThoME9JkU0JrvNEqMidYuma3n2e9oeVd5Dn8O6QB/duHRT/i0U/4fCvP7I0mfaP61uuwvZS7fa3iHOSyrq66d67kYHujosj4j7DrWvI4nv8AxeqF6ExNSClDa3W7rArtP5dcpgxFp+WuKaKq0JBiipRRarptUlCIdKNbFARakgwKkz50rI/aDh2u4Q2lfIHuWxcM6m2JZgPM5R5eOk1p3NZbtZhbl4ZV0UfUncjxjT60r9K5m1gHsJZQi3bCAeXeMfxMZJPsd/i2qpUMzQAfMCT567k9dyau+N8UsYYrbKh3k5hJABHjpr/WqC92iNzvFcqzCqCwB6ahCCN439NtM4uvUew3DbV60eWQHXRxMNP8vT1is72r4TdwOIe8qtdw92OdbB1kCA4kaMIkGPEHQmqHhHHBZuW8RYlHVodNcrLpIUmSRG8zrB00FezW8QuOsrdswQd1PxA9R5etaTrWVmPNeEJnfmWrguKSAxAkOjH4byTmQ/za+BYTK7VW1m9P/wAlxDzMHGuSY6x3ev66aDE9ibb3kuoOTcR1bOkjYgkEDxAgmap+0eX8TMXWcDjyRyw0KcVcL6lxqpMRsdDNLocq7t/2du3lS/ZtlmTMrgbsphxHiRJ03ObTavP8NjREE+h6H1r6Z7KLnS8pQrBs6NH5rFtuhMxMeoNeAfaBwdcPxHE2gIHMzr4RdAuCPIZiPase/V2Mvy8zNrQ/Y5at3eIkPGuGuxruc1vb2zH2q0+17sVeVkxVlTctqhW7A1tqpLKxHUd55PSBNeZ8OxN3C3UvWmh0Mg9NRBB8QQSD616lwL7VsxC3AbRPV4a3PgWEEepEeJo59zLS4vPjjyY4fx+ldxGCZNRqPGvRu0/ZNLrc7CIqltTZBGQz1tHYD+7/AJei1j77FGKXEZGG6sCCPUEAj3qbzn2ytvN9qDr1p2xkVqODdksTjWHIw1wqT/zCMtoeZdhBHkJPkai9qeDJYxL4e04fk5bbNsXuKoN1vLvlljoFFLFb62qtMRIgijMgIkCq8gg1Ks4wgRApyovP8JOCRc6B/gLrm/lkZvpNfSCWgoCqAFAAAGwA0AHlFfM6PNe+dhuNjF4RGn8RALd0dc6gd7/EIb3I6Vr+O/pf4PuxfEU0rRYpFa1dIGSlRcldphXqtSLa0ikU9DRSkErqUw09RSPBQB0pzL407Dim3Wmlp4ZcE7Vhe2uMew8gmWX8PvEAMWOsdSJnxEDXUg+g2beleV/aTcu2calwqWTlfhjYSklws6ZiY+m8AUrl+zmz6YPtDwwgy5LE6lp1JOs1X8Owx2Uhh7A/I1Z8b43bxNkzbNu8CDozMG9z5TvUTh2EbJzAJGx8j4UXN9FNaLgnZ0Oc1y6tpOskFz5Kuo9zXqHZLiuEsjlWW23gKobxZiBqfP6147gEa4wEwOv9fWtThOFNtbJEgEnrH0iqklTa9ZxPFkIiRJkAddRXmvamS1xQQJ4XxBj5nmFwInXcj389bPh3Z7lkOWZmVWYSTMkECddj/WqvtC6tcYXEuLPCsSwAKxkZA1wNOzhoA6VPUkVLrc4DiPKAYgkOtokgbfhgSfka8w+2rC571vGIVKsgtPlDaMhZkYkj8ysR/wBmPGvSuz2JutlBsOCcNaaA6fxuIkxqAFJ/m0mKqvtGw93EYG7YSxcLk22SQs9y4rMJU75Q1T1zsT17mPA7d7oa6wHShMw9KIjVzOazE3hvGL+HM2rjKOqHW2fVDp7iD516t2V+0fDXLQTFCyrr/bAEL/Izbr5TI+teRYfDPdYJaRndtlUSx9h+ta/BfZdjbiy7WLR/hZmLehyKQPYmtOL1/wBXxemx7T/a+lu2bWEIuXTpzYi3aHis/G3gNupOkHyRsSrGTmk7knNJO5JOp9a1eK+yjGKpZLli4w/IGcE/yllAn1IHnWJZWRijqVZSVZWEMpGhBB2NLrf2PyS9faW6K3WfMb+4qO1oqf3BpraGRRrbhozGB1qWP0areVXPZztBdwN4XrWxGW4hMJdUHY+BGsN08wSCbgPZPFY3WzaC2/7Vzlt+xgs/+EH2r0js99mtmyVfEP8AeGXZMuWyPVZJf3MeVac839L446+56ars/wAU+9WFvC1ctBtluAAkdGWDqp6HSd6swtJFooFbOuGZKVFilRoVbNTZrl2uKKshkNS7Nuaj27VWGGXSoqo6luKatuakRT1Wo1QKrAqh7V2cwtk/CLlv55uv0rSMtVvH8BzsPctyQSNCACQQQZANK/R8/bw/juEspdOYopOpWRIJ11A261VYe+LbELqjEK48jsw9KuOO9nVQlS9xiD3h3Y8Nl2kgHXw61UWsAqt3RGgkaxp5GonVX1zHcAo5wBkEXAD4ET/t9a9b4SVOdQAApGYzMmAAugry3A4IvdkDaCfdtNa3XZ9GZLyqYPOMSdNuvlXTx9Ofqe2nBLZmDSXZANAMqZgF28Zmsn20g3zoZPCMfH/dKdvl8qtbuJItutol3TIZBUAsHQtBOkwDvp0qFxTjgtX3tvhLb5cFibi3Ce/ktYYs9oyndBIAIBIiD5Uuxy0XDXDLaMsoNkCQcpIWDAjWddvKqDH9obC8RXAlbssFy3iSBnZc6pB3lfzDqY86m9m8ZcvNhs1gW0uG9IFwEWxkttbWMsksO9poMvWqi9xLC3rq8Su2nVsM72MxD8tpzBXBjKWU519XUbxC3+Dzftd4TsngrbvcGGts7sWZnGcyxkxnkKCegioHEfs6wF5swtNZPXktkB/wEFR7AVqMNdW4iujBkZQysNirCQR6g1KtWieh+RoshYqeC8Bw+ETJYtBJ+JtS7fzOdT6bCrIpUp8OfA/KlaXSCKDxEIqh472PweMcXL1r8QADOrMjEDYNl0b3rUtYFR3SKfqljMDsHw7KF+6rp1zXMx9WzSatsJwPC2wBbw1lfS2k/OJNTopwFGQZD0FSUShW1oyilTKiJTCtPQUjPpV2KVIKUprT7KyRQvvKT8QBG+oqZhcTaYxnQn1E1pfSYKU1FTbYri2/CiBaztXDgKeFpia7RH18vSuju7Dfw3JO8iAPeotUcRQ7oEEeIPQxt49Kc413Ougj9ZjT50mteo8xEkeEmgPKO1uKzuQVhQdDqDI6xtFZK9Ak9K2/bHhF8FzyXZJkOozCPONR7ivNr9lnYLMZiAJMDUxqdh6mufzy+3V8flzsWdji1uxacwTceDvAUL8H11oWA7QXBaKICxZixCjUSAoBPnH1qoxWCtIxz3VuhSQcmdVkAGJdVJBBBBGhBEGgJxkA6EKoOijrAIGg2Gp+ddXPVcnUj0Ps1gns287jMz/GCVCokMRvvLhR6nw1rvaDEi7iroMJlwvFLYDBxmHJuhSpyaiEk5W+fQ/Y0XMTh1Oqi8X70QyqC1sMp1E5k023nyqCHy423hGZ7t+3bu3rjPfvwMiF0+9KLhVs0A5FgAFV/Mct9I5a7sITctK5QFXjkHvAOEsLbuEyJCkqwUxqJPhXnXbq3ea7GLxluyVbMVwysbNrMCyW2JKlrg106BgfzV6HwLjdy07XMQ6s11bYslRNhFFi2bnw95QXVyo1JBA9M32nQWsFgjkAbl/eHVgDNx81x8/ju5848KnPZ6veznGSvDrd273SpCE5SyoHM288kR3Cu53I8YpmL+0y3IdF/CBIzMYkZCFMCYElTTeJhLtjD2MOQtt8UjOhnILYuDmWWWSGzZm12MAGNarftB7H2hhxcwmEXNbZmcW1juZGLSBoBp7aR0FMkx/tKBAyqpi2snPInSdvetJ2Q4q2JstdIgG4Qp8QEQMfTmcz9OleWfZtf4ZgbJbGhRiuYxBaxcuG2oChVV1RlJMM0jo29b37NuKNiRjHVSLBxt1rLHTMtyGfTp3iWPncI0ijTxsIMmmsk0dU8aZdYLuY3+gJMDroCfagI/LrgSpIWnZKelhtta6xigXeIWVOU3UB8Mwn5TQzj7ZIUXFJOwzDX0pGlC4KejVBusVGaYA1b0HgBvQ7jhsrlm0EhJAWfFjuT0ifanhats1Ks3/6QL/Z/wDjL/rSpYNRcPjZlioKiNY118Z36VXY++JIC5dTEaRExA+mlO72UhV8CY+sDb/pUHiDEn3Na2IlX/D+KvbsBjJ7xETI0AI0M9fCK0+H4iDAOjEAxG0iRPgaw/AbwJS2VBEsxJ2jr+lXbOMxyMBsIIDDuiAZmelYdxtzWstMDqDRMtZfDYvKw1jxKkxEHxHketXuGxk9Z+hrHzk+2l4v3EyKawoitNJhV6hAxzstt2X4gjFZ1EgEiR615J2c4auMxitePdV0Oigcy4ZZVMCACLbExvHmSPYry14vYxxwhuvBIsPMy3dNwPYBRR3czZgob+8NYkjLrm9d8+/To46z8fVn36ZfttwS1ZvXQkC3mlVUkKGVVDr3i0gAQCCJ0A2qo4RwNsTnFvCm5lXMWttcBHRdWLqSTsuWTBjY1N7V8Ya8czEFtQE0KW0K5UWCNCqkAAbb9RQn4ycPgLeHtkEXZuOVyGHuq6jMcpYMuQDRlIg75hW/rXP78Vz2K4neuX8JNxbFmzlVmDAILVg/iMzN3TIOrQI5npWy4imGyWsdh7Ns3XxOIDX7Yy23tvdu2hzcuhzhhDETMHU71n2QcNZsNduEBTntWrTSGKZ9LpgiNEysAeqir/jOH5WACLybFhLtx1zuczJmz2oUqD8ZIyiYAU+VVEVluwWFb/iFm2qKEYPmlnuOVFtmyku2VRmC/Cq7Ve9pkL4ty1wNas20W2O6QA1pcxaNZ+M97oRG+r+yvELC4lwCA/IbwzBS9sM8eSlj7edQO1fG0uvcJIQSQFJGZg0ZUUbmZg+pHmK/ZKvsc2PN3D/gWlsmGttdDKIQEXFRlM54JyhgZAbUwY2HaHtbas3HsNae6psul1dUU80gaExn7qvqNNdDIMQPs1x5a3dw05jZYN0kC6WMGNjmVjH97yof2kAcywGkfh3jH8Um3+kH/NRgP7Hr9/v3r7qttFPdCAC4wZmCpdYiGXIomAJOpJgAeh2UVFVEUKqgBVUAKoGwAGgFeb8BNzh+MZXR1wzpYRzutu7yrTtcY/lXmXspOwN1dgNNzc4mgJUSxG8DQbfmMDqNvGkFjUfHYnlievtvIA0JE7n2mqLF9oiCRIRQTJUZ2jLMgxEfGNvyHwMZ9cXzLrMZYksUa4Wy5e70AkkSNJA12pyDWtfjUB4+NVZoymCE1OSYkwV0nSs7j+JvcwuYFh+IqZZgEG2XMKsDfQAyfOpXDVXmLzWDAqyBVUIoDlQ7TObTTrpVX2lvANcshAoW4ryuxBXSR4kMP3rVYQ3Bb6BlUoG1Eg6zJG42+f8AvV9ieJZAHCBUOaGIGYQT4bAxoKyHB3IYRJ1EaanXb1q4yvy1W4gnKWXNMajuyNhA8vlTwjsXx0MNyYAJ6D4gNvepv38G090KoUBV6SZ0A+o+dZVbbEwAJIjQeYP5vSpt2xd5fLjuzOXTf+Lw8KeDRf8Ajv7ilUf/AIb/ADf/AGf+alRhLThd4QzaxMD9+9OF2ySc3xEk5tTE7VBwxKgwd9q7YUkwNY69PrVWFB8IyoxObMArDQH8xOuu2hqxOJQW0BPe6ndhl2Gmw16+FVtq0fA1KXCMYhY1mseo15qwwxUWw+nxtBggwQfE9II96t8Ji1KgM47sif4o1J22qhs8PYiMw+U7/wDSp+HwcRJ29Ovj41z9cN51F9hcQp201/f9alG7VNYUD/epD36njiwurB8dclSPEV552kwVtES0dDicXhxcUb8lLiqsxqoNy9bE+DCK1+N4ittHuXGyqiliepjoB1J8KgY3E4e2DdxLImhIa4yqFMo2UMYHxLbEbnKP4dNZz+0Xr1jw3tJwaMRdt4dGKC64UHfQxB8wZBJ8K1PY7snYvYa9Zuy45mt1AM9u6EJy2i5yxlEMSNTG2XTYdnuVdsvcuurZr9+GYhWyi4yhWBiCCrCPADU70/iCpbZ8OlzkI2HuFnDqmR2PLQoSQeZGYgD+zNXkTermInZzhQw2B5WYGLga6CAEe+yInJA1OUrCHXodJOlT24sKr50sLc+7cu0959TcK7JGwOfOWMGM6RlJ1sOA4QNgsCouAFnBe5mDANbbNcUGYLteS37qZ8C/tJh1vWbiWb/MyOrtYV87OIbOqDN3nyo0Cfyk7gU8Sx3DeHOljF3gpN+bNwMElirBnZQdJBypK7aeQoPZzhF+/Z5twZrt1S6ZgMhtPqQq9WlQ2p2YCt9xPjOGu4XE4fDXbb3BYdVVCzDuJ3WBA7ygxqCdo3qzwvFMJas20S/byW0RUYNoVRYUgjcQs6afOgMr9mOAFjHYlWVbbNhsNKKCEVu8GEHb4ep8dZrI/bBxq6OKG2LgdLKoq21BGXOim4jGO8xOs6xIG4Ir0jiHErOCbF8QJLLcsYYqAGksi3iFJA7ubMmp0+UV5Z9nWHTFcQfG424ALdzmtmBhrzsSgJiFVTrqeijrU3/So9E7Q37jth8I4uKpw9lcSmQTdZFzrb5hU5lbl5SVO6gTuKIr4ZViDc5d423JbMRygylZOrRlAkkzl661WdvO2FplV8PdYsgeHgjl3BAzEMAWKAkgDqwOwIIfs1ew+CVJcupZn0aYuXbnLLEaExJ36+Ymp9pv01WOxNoWnS1dEXGABJ+DSR07qHQabFiarruHtchbogfjDM0MTAkiQDpMJpHQVZXODBgcrGGA6A/CCBHz6eAqLc4DcggOIkGNtRME/M/M1ZHYfG2jh7ihhmBEEd24wufEve1IIWCB4j1qFjbyXroY3OWGS3JZWJGQKCRAMyE08zT24VcX8k6zodNOn6fXxqK+FbQEMI6/r/08qMJdJiMJnQWgcwZTnIZAY1MgjwkRA1o3aV/+U4JyksDrppHrB0OvlVOcK06tlMyd4jwEe9S+JZrmUknQAESfi6mPOngQ7OQMDm0mcvejfaYmjc/vSrAexmuWsOywSDHhTreHPjGvjVEX3y5/aN+/elS5f94f5lpUyHt4MggeP6fuKlW8ONe7161JtWqLkpWngaCpVqgxFHtmoqoMFoq0wNSms1ChqbcueYrNdvcW9nCm5bdlbOolTB1Vv9qrOL8cvWMfbAYm0LNtriT0bMpaDpMka+WpFLZGfX5Zzcv91rcdgEvLlcSPkR8qrsT2Yw7lc1vMFBVUJOWDGmp2EDSs0nF7xs8Rdb7nLeTlEMe6hvMBk8AV008KkYDGYmzdwefENdTEqCVYbZssddMpddREzBHWjyT80/j+/S/Ts/hwQeWrAW1tqCqZVRfhUQoMDzJqSODYcsGOHtFlAClkDZQCxhQ0hdWJ03JrC/8AF2F6+L2NxFv8QhFQM4C5m2g93YCfA9KPxfirLigjY+5Zt/drbAjNDtkkSBsW66j11o80/PM1vV4fZyhOTbCjUKqhVBIiQFiDGk12zwqyjFrdtUYgyyzOu53ifOsBjeL4n7phHe/dt5nfPcXRzb/DMkKBmK5mWY1y+JqYnFz91xb2cZeuOq2yDcVk5YL7rJO4O/8Ad1mjyP5o2lvAhSXXKHMy4toGM7yQJPnNRMLwoqxZrjN0iAFIIIgrlgjX99cc/aO89rCLzHS8Lyi5DQXtuJtk+I1UGfc6zUnE3MTdxGOyYl0WxmcJrlIEwo17vwnod9RpR5j5p+o2F3Aq06MJjNlZ0nLoJyEdNP2KPZshBCAL7D6k6z51geM8avNh8Hc5z2gxui89vukhHtrmyjrGYxtJIG4op4sfueKuWcZeuOoswbisnLm5ukknVSR7azR5D5pv9/jW4uWQ3xqjwPzIp/UaU+0IXKFUDwAUD0AA/c15+e0d50wSG46XBfVboDQXRo5ZbeQZAM+51mp1m5isbiMWtvEtZSwTbRVkZmzMFLHTWbZM66NEUeUP5pfpsDbG+1c5fnNYntRisVYXCLdxDWz3heuWSe9DKAY0k5TO28xFWnZXGC4LhTE3b8FZF1WQr8WihmMA+Mflpzr3hz8kvXivzbpjWT4D9+1Htk9Vj0M/0p2by+lW0QWwg/hFcOCU1P08D8q5lo0sVxwFQcXlAb+Jenmf9iDV9ctBhBMehj61CxXDAz5iY7qiepgtpttr41UosZuT+yK7V/8A8MH7Yf6V2q8oWO0qfY706dR8v3NSRZqQhwaelSjYrnIpaZmanA0japBKnD1T9r+HticPy0Kg51Y5pghQdNPao13g+bGcxyptthuSyycxJA20gddZ8NNK0Ny1IobWZPtS8Yi8S3axWE7MXUw2Ls8xGztbCMcw0S4T3gBpp4TUzhXBrguWXxN5SlhBy1ACqMqiCWgQBHWZyjWtKU0PnUTi2EN6zctLAL2riAmYBdComJMa+FHhEz8XMrN4PB4tGu3MPibIt3bpOYEMCWchAGKkTLRAMTAqfZ4Yfvq4i4yXG5Atuukm4qrmIXLGneMbgHYVLv8ACHu8zOyoLjlnCEttaFpNSqyfz5tIKIBMTR8Dgn5xvPlzNZtK2Un/AJuovsJA0YLYE7xbGgjVTk/i5iv7U2ufyjavWrbWGLsHYDJGUqWGoUd0HvaRQsQmJfC3RicVYZXFvI8qluRcUmHCjfKfGpuI4LcZGQFAP/WcrS2YnEXOZ3hlhY20LSVU6bVZY/BM/KyuwyXc5YkZ45d1NJUiZcdNp6xRh38fNusxxHs7mOEdbttWtW7QvAnR1tZO+DuB3CJMCANormL4XeF/FtbxNlFuyXEgsEGUtmkd0ZXXqIzjxFWt3gTCeWUA5bWVUz3bPJyKufUk8wK/uRrSt8HeVDBHVEvKO+6u5uXMPdR2YLowa28kTJVD+YhTxhfDyrsdwkFMHawuItZ7Wa4oLguxYo4ZUGY5cyz1ERvE1Ju4fFXsPctXsTZuNcW21qMqgi3cQ3GGVJK6rrqBmXxqwbA3yom4vM5DWy/UMzA5xCgEgSdhJA0UHQScFcHusgFsXuSYMqbpsvBWNFkXlIB+BljXY8R8XKvx/Zhrj4O7auIMi2BdGuW5yuWQykDrk9wF86PxDgmIW7ebC3gq3geaGmQSSTlOUx8T+BGbStDgbJREQwSqKDG0qoBj5VJHWn4wfFyyPEuz97LhOTfGeznJe5mkszKwgQRAIiDsAPWrzgFvFLn+9XluTlyQoWIzZvyjfu1YMKQNHic4kuwcCuiKAHNdLGmsTIP3NcKihEmmlzTwDUx2NMz04NPhTwO84eJrtCyjwHypUYEfCMvSOtSVczrtWeweMTTXWPeatbOK8f34VVidWqIaLy6Dh73ial71nVBcumMlFihu1EALLUe8WjuiT4bfr+/XapZNMUUyVt5ro2tA6aS4AmDpttIGsbdDQxfvEmMOfe4n9NPlPX3tMTalYyg6jRtvA/Qmq4YZZ71u0PGXJOxYzPWCTJ319aAWe7P/AC1CyYOcTlDESR5gA7+1GLPJ/DECYOcawREiNDGY+3nQHsqvw27RUnfPGmsHw2Mx5025bzEZrdozMzcPUzoY11A08/mBI5lyAeVr1GdfLr8/HbpM13m3P7If5x/pQjaGjZLcg6fiREBfL6eQ8a4bIEQlqNNS50iJ6eR18qALcuXNSLYMR+ca6EnXYawNfGuJduSAbfvnXQdTG/l/pQhb2JS0G7w+PQSIb1nvA7bUrloQAEtGBpLnqddYkCZoA4uXf7H/AMRfDfbx0p5Z4B5euumcaQYGuxka+X6wxZBn8K0SSGINyT0IMQegJ/wj27ew4Mry7RByz34kgzEeEgadfbUCSty7/Yxp/aLv4bU/m3IH4Ubf+8GkzMmOkDb+LyqNZw3ekWrWhBlW1EAjw9R+9LBECgBRAGwpGbbkgEiD1EzHuKdlpwFLLTBtINXYprCgOkiuRXIpjt4UweVFLyrmeBNQ2JkwfWmEvX9iu1CznzpUFrCcJxBfMS0agrG+Uan9D7etaXAYzMwg6iZB3GmlZGy5nQAKSdNun+1aLCsO6ZgQNv3+4rSoaSxijsd+vvpVjh3IGuvnVVg7QXvEk+h/X61IGIAM7jxEf61nYtPa7NKahXsUojeT+/8AT505MQfUUsGpQXWihK7hxImjm3U6YAFMbDITJVZ8YE7Rv6aVKVK46RS01VicGZlUtePeU76a6eg+VMfCNJISzEMBIaddpI8pn1qyuVxDTJWHDtHwWd5HdaJkAE+eUR6gdKYbDSPw7Man4ToY8euvl+ulwVBoV1RTCsbDOSSUw5nqVaekz8vpTmwbSe5YMxEh/wAu0jYaeFSpoqt5UYEO5hmPS3PQwdJQg/WBHhT7eHH5lTrsBAHy8h8qlha5SBluwq6hQJiYAExtTytJWpPcAoAi26RSo7tO5iuXMXGwkdaeAcpQLrx/p1ov3geh8DTWXOP9qAj3HI0qAcQdfEUS9oT4D2qt+9TmAOupkjTXarialX8VI0PTXw+dRfvrbZZHhpr1EzVPdxE3CkklQpYiIkiY/WhYhyNQw9j/AKVWFrU/e1/s/pSrKfeb37ApUeI1Q4X4n/mP/wDNavBbD0/qKVKqpL59h6D+lBOw/fU0qVRDp1vp6N+oqTw/au0qKIucJUs7UqVY37WQrl7auUqRol2m0qVWRw3FNvUqVAR1oyUqVOlDjQ7u1KlSNxadd2HrSpUEj4jb3py/BSpUwYPj9z+gqYux9/0pUqKFPj9/cf0qsv7H+Vv0NKlV8prN4jb5/wD7XqM3wn+f+tdpVaVpSpUqA//Z",
                "detail" => "A new study conducted by researchers reveals the numerous benefits of regular meditation."
            ],
            [
                "headline" => "Tech Giant Announces New Product Launch",
                "image" => "data:image/jpeg;base64,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",
                "detail" => "Tech Giant XYZ has officially announced the launch of their latest product, promising revolutionary features."
            ],
            [
                "headline" => "Government Introduces New Environmental Regulations",
                "image" => "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTExMVFhUXFxcWFxgXGBgXGBcYFxUXFxUXFxcaHSggGB0lHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGi0lHyUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBEQACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAABAAIDBAUGB//EAEMQAAIAAwQGBgcFBwQDAQAAAAECAAMRBBIhMQVBUXGBkQYTImGhsTJCUoKSwdEUYnKi8AcjM1Oy4fEVQ8LSJGODFv/EABoBAAIDAQEAAAAAAAAAAAAAAAABAgMEBQb/xAA4EQACAQIEAgcHBAICAwEAAAAAAQIDEQQSITFBUQUTImFxkaEUUoGxwdHwFTJC4SPxYpIkM9Ky/9oADAMBAAIRAxEAPwCwtlUZkxw8x6XKWFlAQtR6D+sA1iFlYZkD7Soh5BZwNaNgh5Azjesc6oMqDMK4x1waBdjhIOsmHoGo8SB3wrhqE2ffDuhaiWT3QXCzJer7oLhYV3ugFqAL3QMEEFtghaDVxkyutRDsmLVFebJU5qIXVrgGbmiPtp6DsBsrUcjhCySXEi4we6I3tjD05St3rVG5iJKUl/RTLDxew17ZJfB6jumpfHxrjGyljq1P9sjJVwUZbq5f0WJaLSVh3yXrT3ag+BjUsfCo71Y/nwMrwsoK0HY0k0xOTJhMGw0V+RpWLVTw1X9kreOv9lblWh+6N/DT+ixZ+kaV/eqUPfhwBOHIxXLA1FrG0vB/QaxEOOniacrSMl8nWp2mh/vGWUHHdWLk09ixkM4hZkiDrqnClPOCzAnWYDriVmIJiIxt3hCAOO2GAQYAFWADzvp3p4zG6iUcNo5FvkOMR3LoQMSwWMS174g3c2RjZFhjvhWJam11DHMGKtC6zHCzt7J4wXCxgaStpLsAbqgkdnPsema/iwH4e+PQ4DBw6pSmrt8zzmPxs+tcYOyXLnx9dDQ0fKYrUnGlTUkAVyGfeItqUcPCyyb7aXZRDEYiWrm/MthG2j4x8zFbpYfjTf8A1f0LFiK62n6okR3Hs/Ep+cQeHwr3i/KX2JrGYlfy/wDySB5nsk7qHyit4XB968/qTWOxXd6AvTfYb4D9Ii8Jg/f9UTXSGK5eguvmjNPyNEfYsI9qnqh/qWJW8PR/cB0gwzUeIh/plJ7T+RL9WqreHzB/qf3Bz/tD/SFwl6f2L9YfGPr/AEOXSgPqfm/tEX0TLhL0JrphcY+o7/UV9k8DEP0qp7yJ/q8PdfoP/wBSTY3h9Yi+i63NfnwJLpalyf58Rw0jL+9yH1iD6Mr93mTXStDv8gtb5epjyiP6diFw9US/UsO+PoyJrVLObflP0g9hrr+PqiSx+Hf8vRiE+XT0hyP0iLwddfxZJYzDv+aAWln1hEXhqy/g/IksRQe015orzElH1l5iIuhU4xfkx9fS4SXmirM0SpxUjeD8xFbi0yas0RN16YCYWXY4DjxxhakHTgwrpN1waXxlsR+RqrFkK047NlE8MnsSSrXIY0yY4Ygy2x71qp5Rshj6m0tfzvMk8IlqtD0jQegpcqQssgk5kk41Oqo5RbdPVKxjcnfcsTdE+y5HcwqPkYg4JklVaKU2wTF9Wv4T8jSIOnyLFWXEgMwrgaj8Qp5xFxfImpRY/ryNUQaRIck8GDLyAlBiIHMdMdPiShlqe1TtEaq5KO8+UJ8icY3OF0bZyxMxs2PLu4QnyNlONi5MJiNixtkF7vMAtToxbsc8TvivKW5mC22q7LLBxXJcPWOA8fKLcPS62oocynEVuqpufL5nMypIYoNRxxz6tDhXvZvKPWrRHkHq0vidA+Cga27R3ZL8zxEZYdupKfBdlfX1svgaZdmKXPX7fneQkxeVipAALsFxCuwXActRkaeEJpPcfgSC0TB67D3miDpU3vFeSJZ5c2O+0zP5j/E31iHs1F/wj5IfWT95+bD9qf2q76HzEHs1L3UPrZ8xfaW+78Cf9YOoh3+b+4usl+JANqOtU+BB5CH1Eeb/AO0vuGd93khpn/cTkR5GDqf+UvMM/cvIQnD+Wn5/+0HVS9+Xp9gzr3V6/cb1q/yx8T/WDqp++/KP2DPH3fn9w309g8H+ogyVff8AT/QZoe76jap7L/EP+sGWt7y/6v8A+gvDk/P+hWmWFIArioJB1XhUeBEFCcpxblza07nbv4iqRSenJDtBp+6L09N2bhW6PBRHEx881d92h6Do6OWgu+7LZEYzfoyJpNdUO4rF/o5olZk8MRgnaO/V4+UThFNmPGVMlO3M9CV41KRxh9+JZgHB4dwAwBzFYYyrN0bLOQu/hw8MoTVxqTRTmaJYei4Pcwp4j6RB00WKs+JntpCTKmdTOmLLaldtONMOMRUI31ZYptq6Ry1o6ETrRMVknyZsqtb6tU1ObMNfAwLDvgy2OIjHdalPTNgFmmmSHD0ANQKUJGWcUVI5JWNtGeeN7WM5yMjhELlniN6rvEK5Itj0rwXnBwsSsU9KTSxWWCK5biRieCn88dfoujZOq/BHF6WraqkvFkuhpIY38g2C90tMjyBbjHTxE8kHbfh4vb1OTRjmd3x+RpS5ZmzKDC8aDuGrgAPCM9SpHC0Mz1t6/wCy6MXVqW5hazABqOpKmlManGnZwxgjiJtxzQaT4328QdOOtpXsQRpvfYqDDAk6k3L+FK3cxnSuWcVdaus6vja+2nmSyvLmIgYtIhEACgAIgARhANMAAhgIwAIiAQgsABRLxC6yQOeEQqTyQcnwVyUY5pJcyLTFooJjjvu8MEHlEKMclOKfBa/UdSWaTaNiyyBLlog9VQOQpHmpycpOXM9ZSpqEFHkg3SdURJ2Q24N3GDUWg5ARirzEO1DTntgTZCcIzVpK5cs+mLWnrpMGyYt1viT6RNTa4mSeAg9tDTk9K6fxZLr3p+8Xwo3hElV5mafR9RbO5p2PT1nm4LNWvsk3W+FqGLFNMySpTjujSWZE1IrHh4lmGQ262rKlvMb0UUseAglOyuSinJpI8jsmnUnTZjz5LMZlQWRqkA4ZGlMMIz06sYt5zpPDTslDgbWh9GWFCGS1TJajEq/7snuv4RdB0W7qX0Iz69K0ofHcxrfaEadMMj+HXslqknaanaamM1WUMztsbaMZ5Fm3K6yMbzEk6gMoqzq1kXdXxZbDfd8IhmXMlkJZpugmmAxi6EMzSW7ITnki5PZHO1Mx2ocWPVLx7U1huGA7iI9ZSpqlBRXA8dXqOrNye7Z0sqUEl4CleyO4ChP/ABHOM8u3VS4R1+L0Xpf0Ll2YX56fAu6MIQO95b9LqAstanM0J1RjxydWpCm08l7ydn8Foi/D2jGUrq/DVEthk/vFZioEtLxC0zFSBhmxzNIpxD/wunBS7crXd720112XBX1sTprtqUmtFw/PiOtM5hZ+1i02Ze/CBjhsqaQ6VGDxTyLswjbx4fHkKc5Kkr7t38B+mpt2c12hYqFVRiFBAqabTqHHZEOj6WfDxzq0U229r/0uPlzHiJ2qPLu9PD+yb7KomypZUUlpfmmgxwqQ23VzipVpdROqm7zlaKvtrw5FmRdZGHuq7KljuTjMLS1VEvTTdFGIAwSuoRqxCqUMihNuUrR1d13u3MopuNTM5JWWvf4ClWMPKlkqoeZNuoBUVT1qiuIGOOcKdeVKrUSk3GMdb69rh8fQcYKUI3WrfoTvZJP/AJBCUWWKKbzenkNeVYjCtiF1EXO8patWW2/LkOUKbztLRbeIJWjJf/jqysXm4tRqUXUcjqx4RKeLq/5pqXZjotOIlSh2ItavcjfR0orPZb9JbBUNQQxJpSlN2vXFixVaM6UZW7Su9Nlz3I9VBxk1fR2Q06HVX6tno12paq3ValQtDid+GcQ/UKkodZCOl9FZ3a532+ZL2eKeVvhvdfLcil6MUrJJYgzTgAoNBWlcxhiIsljZqVWyTUON7fciqEbQu3eQ+Xo5F68uxIl9kED1iaA540OqIzxdWbpRpqzlq/Dltx5jjRglNye2nxKUmyhioDjtEgZ13sBkI1VcTKnFycNld66fDn5IphSUmknv+a8izYrMFM7rFDdWrbr1aCh4GM2Jryn1KptrO0/hxLaVNRzuSvl+ZRseDFvZUtxpRfEiNmJ1ioe80vq/RMppaNy5J/b6lKet5pSbXUncnbP9IHGDFTy0pP4eZPCU89aMe+/lqdFQmPOHqLB6sd5hDsNDDZTlCARaCw7hrwhCGTNlYAIZ0pWFGUMO8V84AFJvSxWVMmS9zVX4TUQ1OSKp4enLdF+zdJbSnpdXNG4o3MVEWKozHLo+L/ayn0n6QvapIkrKeXVqveIpdXKhBxqfKHKaaFQwc4TvIybNZbmAFOEZnZ7nUjGxZNmrn9YjdE7CWyAZCI3GOEqn6pCYXGmXCGVeklsuJcUdpqU21Jovjj7sdzouhmm6j2XzOH0tXywVNbv5FLQ9lxwxCDq172JrMPE0HCO5Ukoxu/FnBpxcpaeCNm0nGgyUXR30zPE1MZ6EWoZpbvV/Hh8FZF9Rq9lstCERcViJhgKsADlONYVtLDHic2pmHExB04PeK8kPNLmSSpU1B1gvKp7N4HA7R37oqlUoVJ9VLVrhbbvJqM4rOtEKVa5ga/fN4CgOdBsFcolLD0pQyOKtyEqk08yeo42t7pWousbxFFxNa1OEL2enmU7apWTu9g6yVsvAlXS82+JlVvBboN0YDYAB3xW8DRcOrs7Xvu9ySrzzZuJGtvYJ1YCgXr+Fa3hkTjEnhYOo6ju3a3dYXWyy5VzuC2W7rGLMiXjmReqaYZEkDAbIVHCqilGMnZbLS3yT9Rzq53dpXLB0t+8lzLg/drdUAmmFccs8fKKH0euqlSU32ndu2pP2ntqVtlYg/wBQBltLKk3nL1DUNe/DGLPZGq0asZbLLa3y109SPXLI4Ncb7k0nSiKyEIwCrQqCACaekdpx1xmqdHVJwnFyTcne7WtuW+nwLY4mMZJ2enAgNqHVOvavO14mgoRWtM40ezT9ojUdssVZL8RV1q6tx1u3crAUlt95gvAdpvG5F8u1XS91N/F6L0TK1pTfe/l+Ii0dKLTy1MJcunvTDh4IecZekpWgo82b+i43qOXJG2EOsxxjuXEABtMIBpPCEBBPnga+QhpBcjadnhzMOwXGhj/iFYeo1lY6zx/tBoGofs51n9cYVx2HdUBrJiDZKw4XYi7klYDTAIjYdxdYdQgsFxtTCAIQmFcYqfqsILnM6QtZmTmmAehgg/8AY2CDgBXep2x7PC0VSpqHxZ4zGV3VqOfwRuaMkdWmHqCgO12rj/U3CIV3nkoc9X4L7uyCkskb8vm/y4Vi4iGAAUgAMACgAQHOE2krsEuBr6aUjq5C49Wl5qe0ReYncMeMcro+SaniJ/zlZeGyX0+BrxC2px4IOi9H3nlo6UqCzXnN67qIUYrxgxOLahKdOb3SVkrX8Xv8ApUlmUZLx11/oC2JHku6A1E0opJNAudW3DGsTliKlOvGE3plTastXtZeLEqcZU3JLjb4DbbYJcthUsU6sMTWhLtW6BUYVplqFYVDF1a0bK2bM/BJb3/NWFSjCD12t6mSY6hkBAAQIAARAAIAGmGBNaDQIO68d7H6BYzUO1Kc++3wWnzuWVNFGPdfz/qxc0BK/wDGmzc7840p7KASx4hox9Ia6cjf0do/ElaZsA845djs3I2Lk4nDlBoGoxpBrCuOxItmhXGEyFGrfCuGgHdR/iEO4wzBSCzC5G1dQwhDGrLOswmMeJERbGHqwIiAjMXfBZjzDBP2Lzgy8xZhFyczEbDGUEK47GFouydpVP8Ati+/fMmDAH8K+Jj3DenieHSvLw+Z0E9boVPebe30F3iTGSj25Sqc9F4L7u78LGmeiUfPxZDGgrGwAOWEAoYChAOluVNVNCMojOEZrLJXQ02ndEz2+ab1X9IUbAVI2E0rqiqOEoxaajtsTdab4kp0xOvFrwLFbpN1cR34YxD2GhlUbaJ3Wr38x9fO97leXbXEppQICsbx25DCuzARa8PB1VVa1SsRVSShk4BtltaZdvUooCgDLDXnnEaGGhQTycXd3HUqyna5WjQVBAgARgAEAAgAASpAGZw5xGc1CLk+GvkOMbtIWk5oHWNqUGm5RQeAEQw0XGlFPfj4vV+pKrK820dboWwXLJLlHPqxX8RF5vzExgrdu/ebqL6tx7jNVl10jlanauRTbRsHygswuRvOY93jBYdyJidZbhDsIcB908TCGOw3Qh3HVAwqIiO43rBsrCsFyra7cspbzgqu2jU8BDjTctiEqqi7GdadOKUvSiJhJoAK0G0tTED6xNUnez0E6umhz1k0rNtFqEt7SJSNW4ZYW6DqBqDXeY2xoU9rGKVSaWa5sSbVOkzjJtAvLmk0AC8O9R8uUU1sLbWBbQxadlI3F7jHObOjYIl1hXCwbsIZU0JZ6KC+ZrNmccSPJeMewxM3ltHd6L87ld/A8bQjbV+L/PQmdySSTiTU74nGKjFRWyBtt3Y2JCFWAAXjAAM4AHwgBWGAjAIbWABGABHugAIgANIAERAAwwAKACWyYNX2QW4gdnxuxnxWsFD3ml8OPpcspaSzck39vUqTpV8y5f8AMmIvu1vN+UGLqkrRbIQV5JHoSOAKnIYncI5xvZ5Kbe7z0cEremk0yqGJJqBqpWLq6Sou6IYdt1lZnXXgNYjjHcuHrVFceUKwZiGZaNkFhZhjTidX0gsFypbLekv+LMVd5p/iGoN7IUppblnR01JwrKbrO6XjQ95NKeMRlFrcrddcDesfR20PqWWNp7TczlwAgVOT4FEq7e7Nyw9E5am9MJmNtbHzi6NDmUuZyX7QOiUtEvSxdl4lbuDSnzKjbLfHDU1KZiNMbbMFOV7rc4G0aMlmUFrWovSZ1AHDqKtKm09LDtA6xjmKGWW2heqjm83Hj3j7Vb2mS5cxmN5P3M1fZcYq47mXHerRO5nlBJ6eJv8AR+2XhcOYxG7WPI8e6OdjKOV50dLB1s0cr4Gte3RhsbbkV6FYdxzdlO98fdU4c2r8Ij1i7dVvhHT4vfyVvNnj3pC3P5FcxoKxQAGsABEABAhAMrDEGsAwEwCAqwAGkAAEABgAVYACIAGVgAcIAJUwRjtIX/kfJYzz7VeK5Jvz0X1LVpTb56fX7C0NKvWtNkuWz+81EXwLQ8Q7QtzHQXaubvSa19VZJzayt0b37PzjLBXZok7I830KC1oXYiluJwHzgxkuykTwUe22dRSscw6iJElwErGfpvSgs4wW89K3Rs74nCm5alc6ijotzM0Fpa1z0acsmW0tTQgG6+2i40PIb4t9nutGUvEOL1MTSOkBNDOKs7ErduMaNTBaU2au6Jx7KyiyuXbLfQfT7S6XKJOk1dDTCZKBrMkzPaFKkHMZ6olbMrFdSNnc950fp2XOlJNl1IYVpsOsHccIzzqZXYgo3BNtrHXQd0VOpJk1FIp2pA6srYhhQ7d47xnEU2ncdjxTTNmdGmylweW9BTUwN5Kd1Rh3ER0E8y0BdlpmJaZzMUdcFnKFYag6NkeOR2MYRbJJ38/udDZZ3VzFYVpgf+w5Ew6sM0GimhLJUTOk0dbpE0EynrtB9Ib1OIjjTjJfuR2YTjLYnazIcTnvMRzMnZCtEwMxplku4Cg8PMx6yjBwgk9934vVnj5yzSuiOkWkBAQgHqIBgdoBFqyaKmzFvKtRqJIFd1TGOtj6FKWST18C6GHqTV0iRtA2j+UeanyMJdJYZ/y9H9hvDVVw+RDM0VPGcmZwUnyixY3Dv+aIuhU90vTOjzLKLlu0BW7TwrXOMMel4yrKCj2W7Xv6l7wbUM19THKkaucdZTi9mjI4tbobWJERCAB1IQApDGAwCFAA0tABLNPZQdxbmaDwUc4z0e1UnPvt5L7tls9IxXx8/wCi50TSpnTfacIN0sfVm5RXiX2kiygtGyp+0W10lS5ftOWO5B9WHKI0lrcnUehgdFZODufWa7wUfUmMmLleduRtwcbQvzOmQqMwPMxkNlylpjTsuzrU4tTBdf8AaGoNilNROQ01anmEMcCQGIFRjQYbe6NcY2SRmjPNK7L/AEbtIkz0aWxEm0dntU7E7K69MPS7NdYYGJxdhVYZo96+RXab+8mPcuMGqwGBwzP4lIqDt3mDchHs+BnaXm0f7SgCzUcdYBkxIqswDY4qGGWI2mFcty27PDgd3+zXTAZmkg9h+3LB1EKCV33cP/nFFeN1mRUtHZnoVyM9iVw0AgA84/aDYwtoEwYdbLFT9+WaV33WXlGqhK6sJ7Hn+kGos0D1XlzlGy/gRzrzixlsHovI0Da1KX64U8x/eJN9kpy2mhk+zVCuhKvQEEYHEbYi4qUdR5nGTsXJXSaeoCtdJGBJU1O+kZnhI3NSxkrHXR6A88KEAgIAE0AEtisjzWuoO8k5KNpMUYjEwoRvL4LiyynSlUdkdPoa3ICbPLYsQpuuci2sAbBWvCOFi8NO3tFVbvWK4Lx5m+jVj/64vZbmaek9oUkFUqMCCp1YHJo6C6Kw8ldN+f8ARm9rqJ62LuiukUybMCFFoa1IqKADYf1jGPG9H0qFJzUn3bF9DESqSy2LmltKiTTC8Scq0wGZ8ucYcHgniW9bJF9auqSWlzP/AP0aHNG5gxsfQlThNeTKVjo8UyxZ7bKmAtcoozZwtK7K1zjFWwlWhNQUrvkr3L4VoTWa1l3mNp4qHCqgWmJNAK1yy4x2eiFN03OUrp8OVjFjGsySRllo6xjG1hiAYACIABSuWcKUlFNvgNK7sh9umAMx1LhwQU+UU4WLVKN93q/F6v5k6zvN2/LaGz0dkXLNKBzK3zvmEufOM1R3m2aaatFI4np9bL1pu1wloo4t2z4FYtpLQrqPUfoZ7kpB3V54nzjl1JZptnWpRywSLGkNLdUtRSpGH1MKEMzHOeVd5maA0cZ8w2ibiAeyDrbad0a4xSMc5sp6VHbYawzD8xp4EHjAyVNmbKahZPVfwcDAjeMN4WIs0xd2XbDbmnT6nMqbx1MwAvHjg1O8w1uVTWVWGWuyBuxlWsvl+8lcMGTgIbWpKMrx8BvQy39S97Iy3R+FSGHK8OMK14tFdTRpnvBn4YRz7krEEy0QmxpHDftGt6dXKYGpWbQ09llIPiBFuHn2mScHY8mt9o7c3v8ArURqWonKya8BWViQFFSS1B3mtBA1cWZbnZslABsAHLCLDPe5XaWIBnZXo6hzQXoQgiAC1YrEZlSTdRfSc5DuG090ZMTi1StCKvN7L79xdSo59XpFcR9st4K9VKBWUM/ac7X+n6EcPhHGXW1neb8l3IdSsmskNI/PxILDaTLmK49Ug8NfhWNFekqtOUHx/EV05ZJKRodJ7MFnX19GYA43+t8jxjL0bVzUcj3jp9vt8C3EwtO64lnoxZ6Xph/COGJ+XKOb0zWvONNcNfP89TVgYaORR07PvTTsXDjmfpwjodFUsmHT4y1+xmxc81S3IhsVkFL8wkSxzY7F+sSxGKlm6mhrP0j4/n2FSoq2epovmMt1sMzAC6g9FRkO87TFuFwsaCvvJ7viyFas6ncuCLdrPWyVmesnZbdt8uZjDhv/ABsXKj/GWq/PNfBGir/loqfFaMyqR2DCGkMY0QCCYAH2X0gfZq3wio8QIzYrWnl95peb19LltH91+WvkULcl5RLGcxll/GwUnkSY0N2TZUldpHaNQYDADDlgI5p0Dx3S9o66fMf25hA3Frq+FIvk8tO/cUxWaokbYcKprkB/gZ+EcpRuzrN2VzAtM4zJlCdeO4Z8gI1JWVjM227nf2CTclolKUUV3nE+MWIzt3ZzXSiz3Jwf1ZgAPc64DmKDgITLKZhzpezMYjeMRES+5esxCzSRgGo47qip8yOENbhU1RFpi0hMdZAYb5bqwHItBIKRh2K1XbQ+w3uRN6Ip8RTV7o9Ts/SwizyaKCxly8zmbgrQZmMEotyaRYtrmVO03aJpOJIGd1cF37YmqFxZ7HM9Ibe3VlGPaLLqIqAwNcQK5RbTo5ZXsKdRtbnHTHvMe8xoM92zrejOjVAE0kE40AyU5c4kgb4G7MEMSKzCEM6smOoc0QgAcIQHYWSxSZ8pMyoGQJFDTGoGuPJTq4jDVpa2b42WvnwOwo06sFyHnovI++NzfURdHpXE8Wn8Ct4WkQzeikrVMcb7p+UXLpast0vX7kfY4d5maemIsuXJDX2TCusLjQHvy5Rq6PVSVSdeStF/l/zmU4lxUVTWrRp2YdTIFdS1O/MxxKknicRp/J6fQ3xSpU/BGFomydc7M2NMaZXianPUI7vSOJlh4Rp09L8eSVtu85+GpqrJykT27R09zUhaDBVDYAbBWKMNj8JRjljfvbWr9Syrh61R3dii2ipw9Q8CPrG1dKYV/wAvR/YoeEq8i5oqzupZXRgrAg4Yd3zjD0hiKNRRqUprNF/n54l+Gpzi3GS0ZlTEusV2EjkY7VOeeClzVzDKOWTXIRMTEMEMQmMAEks0Rjtoo4m8f6fGM1TtVoR5Xl9F835FsdKcnzsvqRaOl37VKGpA808BcXxevCLK7tDxFRV5mx0gtfVSJr6whpvpQeJEYoq7sa5OyPKNHrWYndVuQoPOJYqVoWDCxvO5o6VtAoFGdLxPgo8zwEZKS4muq+Bl2AVMw7Jbnwp84tK0emscYsM5naelS3ksrkAZgnbCZKLszz6dOmSWKOLwGR10+cQNS1GLb71KVB1dwFfrEWyasyjpm1MzYmtBhxhp3ITeXYqWaYO2+sKKDaSRXwrDsVZnubk2eUEtcTQKi010AHI0imK1bLlwR1FmInrKlqLiIgaapapL41mEahv+gi9JbIrlo22VdJ2YTQ6LMUrl6JOO0EkZbacIe4vE4O3WJpMwy2pUaxkQciIiRsbvRe10a4cm8x/byhoJLQ6tokQRCRASOmpHSOaECAAgQAS2a0vLNUYqe4579RiupShUVppMnGco6pmivSS0DC8p3qPlGR9GYfl6st9qqcytaNMT5mcw02LRfLGLaeBoQ1UfPX5kZV6kuJHouRfmqNVancMfoIr6RrdXh5c3p5/0PDQzVF3amx0in3UC7TTgMT8uccfoijnrZ3/Fer/GbcbO0LczDsdraU15eIORjv4jDQrwyz/0c+lVlTd0bkrT6H0gy+I5/wBo4VXoaqn2GmvI6EMbB/uVh7aZlZ1J4H5xSuicS90vMm8ZSM626cLYIKd5z5R0cN0PGLvVd+7gZauNbVoKxjGO0YRwgAaYAFWACWdgiDbVuZuj+nxjNS7VWcvCPlr82Wz0hFfHz/0WOisqrz5my5KHui839S8oWJeqROgt2UP2h2mkgJ7bgcFqx8QvOKqa1LKj0OJ0QvaY7KL4VPmOUZ8W7ySNWEjaLZBbpt5ph2MF+EfUmFBWiObvIdoChm3Dk6tL+IEDxpEiJ3OhbSZkhCfSXsONjp2TXlXjE0VSVmc70xtBPZ1QmTpo5Kz6VoLk0XlHotmVGw7RESx6EdpmIq4MpYtXs+qNkFgzWRmWibeMMrbuRiEIsWOYUYNnTVqgJRdnc6roxpLqD1uLK4ZJy7UY0NN1ByhrQtazo1bTI6l1ZTelOKqwyZTlxGRg2ZFPMu8x+l1jqqTRq7Dbjip8xxgYkY+i6h1PfCG9jvZYqImVDSkAzoKR0znBAhCAYBivQCFAAb0AG70ak+k53DhiflHnumKt5xprhr5/18zpYKFouXMo6dtF6bT2cOJxPy5Rv6Ko5KF/e1+xnxc81S3IzhHSMo6kACMADWEAACwxApSABtYAATCbSV2G5LbmozbFF34RT5GKMIn1Sb3evnr9Sys+27cNPLQ1+i8q7ZUY5zL0342JX8t2KazvNl9JWgji/wBoVovT5aeypPFz9EHOJUlpcVR6mXoaXSWCfWJbmajwpHOrSzVGdOjHLTRhy3qZo/8AYx5mL4/tRnf7mKzuVYEajWAaR2/2jqmFpH8CfQTaf7czITNxyP8AiHexG2ZW4ozelMjGuoioO0HIiGxUzhrVKxiJoauVGlwFbiMuQEco5FxgDKTNhCHYnsVsuGhy8jtgGnY6zo/blYfZ5rAS3PYY5SphyP4GyMSXJjl7yLsyzmj2eaKMKqa6th4YGH3Ee9GBY9HkTLpGINDCBs7CTLoIkVgIhDNgGOmc4IMAhQACAZeTRM4ioQ81B5E4Rgl0nhk7OXoy9YWq1exasegGYVc3e6leJjHX6YUZWpK65u5dTwTa7bsbtisoloE2a9usmOJWrOrUc3xN8IKEVFHNaV0e0vtswIZtW01OUejwOPp1f8aVrL+jmV8PKHave7M4GOmZRXoAG3oYhVgAEAAMACaACSx+mCchVjuUFvlGfF/+pxX8rR83Yso/vvy18ihb6lCB6TkIPxOQo8TF+kV4FW/xO6aWEUKMlAUbgKCOcdA8d6T2nrLROYe1cX3aIPERoTywuU2zTsX7JLCqBlQU5RyE9TsW0ORlzLs51OTE86xqg7oxzVpFhlhkonVdEdJAAyJgBRxShyNdUNCnHii1pDRjSFK0abZc1I7UyR3U9dPKDYE1LufzOS0po0gX1o6H0XXFTx1HuOMIsT4MxJkmkBKxGqVgCxKtmMIVh0+yEQkJopOlIkQcS1YbRQ0ORwxyxz4QAnY9A0Xb5dp6qXNLdevZVgK9ZLA7N86mX0anMQ7g4tarYM1Qs305bUwa6GNNgvGgJprEFwcdCzaLfLRLxYAZd9dg25w7kMrvYyzbbQ2KylCnK8TWnfSFdksqOrrHVOUNJ1mABwgAcJlCCNURlFSTT4jTs7o0l09O2qfd+hjmy6Jwz5+ZpWMqLkSjpFM1qh5j5xW+hqPCT9PsSWNnxSJF6RnXL/N/aKn0JHhP0/sn7c+MfUeOkC60PMGKn0JPhNeRNY6PFFHSmkEmLQKa11gZY6wY1YDo+rh6jlJq1uFynEYiNSNkjNvR1zGRkwxBBgAIMADWgAQEAE0rBHPcEHE1Pgp5xmq9qtCPK8vLRfP0LYaQk/BfX6DNGyb9qkrqBaadyDD8xWLKztBkaSvNHTaYtQlynmHJEZuQJ+UYkruxseiPFrOCzqCcb1499MfOkWYqWWmyOFjmqrzOkso2eOMcpHWON6R2YpNJG8RfTfAzVY8Q2affXv1xcVxZbs8wqQRAW7o9C0Fa+uSqHtAdpTr7xEkzPJWZVtujUZmKEyJh9IAAo/45Zwbfge+E0SU+D1Oa0poQipeUR9+T204oe0vAtCLU+TM2y6MVj2Zks91bp4hqEQDbaNEaDf2a7sfEQ7Ec5dOgGZfRhWI5zndKaDdCeyYLElJMw5lnZTkeUAmjd0BajKZXU0YqwJpXBlu0xyIiLkolkIZ1Y3rPKPVK4FJZYrUEEhhib2uuOuJLa4Tkk7LcQsKI1/0ifRJxpgKj++ykNRsVylceZsMidYLC5yCn8Lo3k0bPaqa3uvGMl9DndVLhbzX3HmwTf5T0/CSOYECxVH3152Dqp8mQNKYZqw3giLFVpvaS80RcJLdDREyIYAAYAFAAjAAIYhtYAEYAEIAETAA2AA0gEWJmEtBtLN/xH9Lc4zU+1WnLlaP1fzLpaQivF/T6FvolKvTp0zUqpLG81dx4S4MS9kSw63Yz9oVpuWVhrdlThWp8FPOKaSvIuqPsnmFhakyuxaczX5CKsY9kX4JbyOjsT46ow2OgVukmir63hq2Q81tSDhc4YhpT/rGNMJZkZJRcWadntIYRIlFmro3SDyWDIaEQibSktTvLLpmz2xLswXZg1jDlE0zO4OLKNsss+Tij315kcITRKLT3Mi02hJn8WUjHcAfCkRZctCk1ik5rfT8LGESFiMrROHEwXYZYgJJztE0+9BcjlRSt8tbp7ZO8s3gTSALI51bQyE08YHFPcFNx2Oj6M6X6k3ZoJlTBRwPZGTr99M92ETTsQkr+J0Nos3Vt1ZIIIBRhkVIqrL3U8KxIinczZjXSQcxCuFjb/wBYlj0g6/iRh5iOkprmczJLkGXpuRqmqDyMPcjaxdk6bHqzzwcj5xW6VOW8V5IkpyWzZYXSTH/crvIPnFfslD3F8vkT66p7w77aTmEPuJ9IPZafC68JS+4uulxt5IDWofy05EeREHs/KcvO/wA7h1vOK8gCeuuWODMPMmDqai2qP4qP2QZ48Yr1CHln1X4OD4XIMldbTXxj9pBmp+6/P+gES9rjgp/5CD/yP+L819w/xd/p/QgianPFfoTBnr8YL4S+6QZafvPy/sDShqmL+Yeaw+umt6b+Di/qHVx4SXr9gfZz7SH31HnSD2jnCXlf5XF1X/JeYRY31LXcVPkYPa6XG68U19A6mfD5oRsrj1G+Ewe10PfXmHU1PdZEykZgiLVVpvaS8yLhJcGS2xqNd9kBfhFD41inCL/EpP8AleXm7/InW/fblp5G70Rk3bMG1zGeZwJov5VWK6zvNl9FWgjk/wBp9pq0qVsDOePZXyaJUVuyNV8Dj9Gyq1baT4YfKMGKneozo4SFqa7zcsqRnuabGkJdRtwpDA5HTmiNYFIjGWRkZwzI5pkZDsjXGSa0Mji4vUt2e3EZxIaZdW1DMGEWXNSyaQmEUvnnDuLKhTZRbG9ANEYsszUwhWHdB+zTdo5wWC6LEiyD1yecOxBsvLJlrlDInPdIZCkggQmNCkWSsmlaMO0p2H6GATNro9bvtEr7O38RKmRtwqXk+bLxESTvoRlp2vMetrpgcDuEGgz1AyRESFxj2BGzVTvAMMCpN6PWdvSkSj7i+dIalJcRWi+BXfolZT/sqPw3l/pIiXWT5kckORA3Qyz6hMXdMf5kxLrqnMTpQ5ELdDl9WfPHvKfNYaxEyPUQGN0Vmj0bU/vKrfSJe0y5C9mjzIz0ctYytCHfLp5NEvae4j7MuYxtDW0a5Dby6/Iw1iVyIvDPmQtYrcv+xLb8Mz60iXtMBPDyIW+1j0rG/BkbyMSVeHMi6ExjWyYvpWW0D/5sRzAiXWw5keqnyI201LHpJMX8SERJTXMjklyCmnpGp6cxDumKzRZl6dTVPI94iK5UaUt4p/BElOa2bG2i1Bla4wZjgKGpJbAeJi1WS7kQd2z0ORIEuWiDJFVR7op8o5rd3c6Gx5H04td+1zTqSiD3Rj+YtGqmrQM09ZFPRqUUDujjTd5NncprLFI3rCPGIlhoyUJPo1FMwR4iAQ222EHPdziLGjmNLaBrUgRBTcWKVNSRzFq0W66o0wxEXuZp0ZLYqCoi9O5Vqi9ZrSRATTLqW2C4ydbfDuDRILdBcVgHSMFxWE9uG2DMFjNtlpvGC4WD9rNIjcdiCVPKzAykg1BqMwy4hh3iGnYidrL0pYZoEye0xJrYuqDs3siy/i9L3otuipxktj0sMNkQGOqIBDhSAAgd8ABAgANIBCpDAVILgG7AArggAHViAAdSINAuAyBBZBchmaPltmqneAfOAClO6O2Zs5Eo+4v0h5muIrLkTWPozZZbK6yJYdaEGmRGsDKsTzytZsjlVzRtcwKpY5AEncM4SA8HtMwzGLHN3qfeN4/ONFeWSm/IpoRz1V5mpJWkcY7exrWKbDsO5syGrr5a4QFqvfTxhNXGQTpIbM8BEJRJJmba9FBsafrhFEolqSZhW7QIOr9eMKNWUeJCVFMxbRoJlJu8j8o0xxfMzyw7WxVexzFzU8IujiIPiVunNcCIsRmCItUk9iD03EJ0FwuIzoLgDrCdsGZANEl2yUxB1YriNQk+BKuj5p9U0iHtENkyfUT3Ltn0cFpXXCzSkSUFEsPoSbXskBdQNNcWKtZakXRd9D2jGNBkFWAAhoAHXoAHAwCHCAA3oADegAIaAA3oABegANYADWABVgAY3zHnABZEWEDn+nFq6uyTTrICfGQp8CYnTV5IrqO0WeQSl7Y7qn5fWFjZWikWYGN5NmzZ45h1TUkpuiQmWZdR3a/lAIty5xyNP81gsO5aluDz4/rGIskgvTWIraLEyN5YMVSgixMrvYVMUSgWKzIX0Wp1U20ippjyogbQ6nUP0IM0lxBwTIW0Cnsin6xg6yfMXUx5EZ6PS9gBh9dUF1EBw0Gg1CE6k3oNUYolXRaDMcBEG5cCahEsydHk6sN8EUSsSPoZMiAN2PhG2nUkiidOLI/9GIycxo67uKeo7z//2Q==",
                "detail" => "In an effort to combat climate change, the government has introduced new environmental regulations aimed at reducing carbon emissions."
            ]
        ];
    }
}
